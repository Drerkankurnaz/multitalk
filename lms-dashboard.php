<?php
require_once 'config.php';
require_once 'php/auth.php';
require_once 'php/video.php';

$auth = new Auth();
if (!$auth->isLoggedIn()) {
    header('Location: lms-login.php');
    exit;
}

$user = $auth->getCurrentUser();

// Dil seçimi
global $LANGUAGES;
$selectedLang = $_GET['lang'] ?? $_SESSION['selected_lang'] ?? 'tr';
if (!array_key_exists($selectedLang, $LANGUAGES)) $selectedLang = 'tr';
$_SESSION['selected_lang'] = $selectedLang;
$currentLang = $LANGUAGES[$selectedLang];

$videoManager = new Video();
$videos = $videoManager->getUserProgress($_SESSION['user_id'], $selectedLang);
$completion = $videoManager->getCompletionPercentage($_SESSION['user_id'], $selectedLang);
$allCompleted = $videoManager->isAllCompleted($_SESSION['user_id'], $selectedLang);

$totalVideos = count($videos);
$completedVideos = 0;
foreach ($videos as $v) {
    if ($v['completed']) $completedVideos++;
}
$remainingVideos = $totalVideos - $completedVideos;
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Dashboard</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        * { font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; box-sizing: border-box; }
        body { -webkit-font-smoothing: antialiased; margin: 0; }
        .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .card-hover { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -12px rgba(0,0,0,0.12); }
        .video-thumb { transition: transform 0.5s ease; }
        .video-card:hover .video-thumb { transform: scale(1.05); }
        .video-card:hover .play-overlay { opacity: 1; }
        .play-overlay { opacity: 0; transition: opacity 0.3s ease; }
        .lang-btn { transition: all 0.2s; cursor: pointer; text-decoration: none; }
        .lang-btn:hover { transform: scale(1.08); }
        .lang-btn.active { box-shadow: 0 0 0 3px #7c3aed; }

        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .anim { animation: fadeInUp 0.6s ease forwards; }
        .anim-d1 { animation-delay: 0.1s; opacity: 0; }
        .anim-d2 { animation-delay: 0.2s; opacity: 0; }
        .anim-d3 { animation-delay: 0.3s; opacity: 0; }

        /* Responsive */
        .grid-stats { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
        .grid-videos { display: grid; grid-template-columns: 1fr; gap: 16px; }
        .hero-layout { display: flex; flex-direction: column; align-items: center; gap: 32px; }
        .hero-left { text-align: center; }
        .hero-stats { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; max-width: 400px; margin: 0 auto 24px; }
        .progress-wrap { max-width: 400px; margin: 0 auto; }
        .cert-layout { display: flex; flex-direction: column; align-items: center; gap: 16px; text-align: center; }
        .nav-subtitle { display: none; }
        .lang-selector { display: flex; gap: 6px; overflow-x: auto; padding: 4px 0; }
        .lang-selector::-webkit-scrollbar { display: none; }

        @media (min-width: 640px) {
            .grid-stats { gap: 16px; }
            .grid-videos { grid-template-columns: repeat(2, 1fr); gap: 20px; }
            .cert-layout { flex-direction: row; text-align: left; gap: 24px; }
            .nav-subtitle { display: block; }
            .lang-selector { gap: 8px; }
        }
        @media (min-width: 1024px) {
            .grid-stats { grid-template-columns: repeat(4, 1fr); }
            .grid-videos { grid-template-columns: repeat(3, 1fr); }
            .hero-layout { flex-direction: row; justify-content: space-between; }
            .hero-left { text-align: left; }
            .hero-stats { margin: 0 0 24px; }
            .progress-wrap { margin: 0; }
        }
        @media (min-width: 1280px) {
            .grid-videos { grid-template-columns: repeat(4, 1fr); }
        }
    </style>
</head>
<body style="background:#f8fafc;min-height:100vh;">

    <!-- Navbar -->
    <nav style="background:rgba(255,255,255,0.97);border-bottom:1px solid #e2e8f0;position:sticky;top:0;z-index:50;">
        <div style="max-width:1200px;margin:0 auto;padding:0 16px;">
            <div style="display:flex;align-items:center;justify-content:space-between;height:60px;">
                <div style="display:flex;align-items:center;gap:12px;">
                    <img src="assets/images/logo-icon-64.png" alt="Logo" style="width:32px;height:32px;">
                    <div>
                        <h1 style="margin:0;font-size:16px;font-weight:700;color:#7c3aed;line-height:1.2;">MultiTalk</h1>
                        <p class="nav-subtitle" style="margin:0;font-size:11px;color:#94a3b8;font-weight:500;">Diyaloglarla Yabancı Dil Öğretimi</p>
                    </div>
                </div>

                <!-- Dil Seçici (Header) -->
                <div class="lang-selector">
                    <?php foreach ($LANGUAGES as $code => $lang): ?>
                    <a href="?lang=<?php echo $code; ?>"
                       class="lang-btn <?php echo $code === $selectedLang ? 'active' : ''; ?>"
                       style="display:flex;align-items:center;gap:4px;padding:6px 10px;border-radius:9999px;font-size:13px;font-weight:500;text-decoration:none;border:1px solid <?php echo $code === $selectedLang ? '#7c3aed' : '#e2e8f0'; ?>;background:<?php echo $code === $selectedLang ? '#f5f3ff' : '#fff'; ?>;color:<?php echo $code === $selectedLang ? '#7c3aed' : '#64748b'; ?>;"
                       title="<?php echo $lang['name']; ?>">
                        <span style="font-size:16px;"><?php echo $lang['flag']; ?></span>
                        <span class="nav-subtitle" style="display:none;"><?php echo $lang['name']; ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;align-items:center;gap:16px;">
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div style="width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:13px;font-weight:700;background:linear-gradient(135deg,#8b5cf6,#d946ef);">
                            <?php echo mb_substr($user['full_name'], 0, 1, 'UTF-8'); ?>
                        </div>
                        <span class="nav-subtitle" style="color:#334155;font-size:14px;font-weight:500;"><?php echo htmlspecialchars($user['full_name']); ?></span>
                    </div>
                    <a href="lms-logout.php" style="display:inline-flex;align-items:center;gap:6px;padding:8px 16px;background:#fee2e2;color:#dc2626;font-size:14px;font-weight:600;border-radius:10px;text-decoration:none;transition:all 0.2s;" onmouseover="this.style.background='#fecaca'" onmouseout="this.style.background='#fee2e2'" title="Çıkış">
                        <i class="mdi mdi-logout" style="font-size:18px;"></i>
                        <span>Çıkış</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Aktif Dil Banner -->
    <div style="background:linear-gradient(90deg,#7c3aed,#9333ea);padding:10px 0;">
        <div style="max-width:1200px;margin:0 auto;padding:0 16px;display:flex;align-items:center;justify-content:center;gap:8px;">
            <span style="font-size:24px;"><?php echo $currentLang['flag']; ?></span>
            <span style="color:#fff;font-weight:600;font-size:15px;"><?php echo $currentLang['name']; ?></span>
            <span style="color:rgba(255,255,255,0.6);font-size:13px;">— <?php echo $currentLang['name_en']; ?></span>
        </div>
    </div>

    <!-- Hero -->
    <div style="background:linear-gradient(135deg,#7c3aed,#9333ea,#c026d3);position:relative;overflow:hidden;">
        <div style="position:absolute;inset:0;overflow:hidden;">
            <div style="position:absolute;top:0;left:0;width:288px;height:288px;border-radius:50%;background:rgba(255,255,255,0.05);transform:translate(-50%,-50%);"></div>
            <div style="position:absolute;bottom:0;right:0;width:384px;height:384px;border-radius:50%;background:rgba(255,255,255,0.05);transform:translate(33%,33%);"></div>
        </div>

        <div style="max-width:1200px;margin:0 auto;padding:32px 16px;position:relative;z-index:10;">
            <div class="hero-layout">
                <div class="hero-left" style="flex:1;">
                    <div style="display:inline-flex;align-items:center;border-radius:9999px;padding:8px 16px;margin-bottom:16px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);">
                        <span style="font-size:20px;margin-right:8px;"><?php echo $currentLang['flag']; ?></span>
                        <span style="color:#fff;font-weight:500;">Hoş geldin, <?php echo htmlspecialchars(explode(' ', $user['full_name'])[0]); ?>!</span>
                        <span style="margin-left:8px;">👋</span>
                    </div>

                    <h2 style="font-size:clamp(28px,5vw,48px);font-weight:800;color:#fff;margin:0 0 16px;line-height:1.1;letter-spacing:-0.03em;">
                        <?php echo $currentLang['name']; ?><br><span style="color:#fbbf24;">Öğrenme Yolculuğunuz</span>
                    </h2>
                    <p style="color:#ede9fe;font-size:clamp(14px,2vw,18px);max-width:420px;margin:0 auto 24px;line-height:1.6;">
                        <?php echo htmlspecialchars($currentLang['description']); ?>
                    </p>

                    <div class="hero-stats">
                        <div style="border-radius:16px;padding:16px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);">
                            <div style="display:flex;align-items:center;justify-content:center;gap:8px;margin-bottom:8px;">
                                <i class="mdi mdi-check-circle" style="color:#86efac;font-size:24px;"></i>
                                <span style="font-size:28px;font-weight:700;color:#fff;"><?php echo $completedVideos; ?></span>
                            </div>
                            <p style="margin:0;color:#ddd6fe;font-size:13px;">Tamamlanan</p>
                        </div>
                        <div style="border-radius:16px;padding:16px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);">
                            <div style="display:flex;align-items:center;justify-content:center;gap:8px;margin-bottom:8px;">
                                <i class="mdi mdi-play-circle" style="color:#93c5fd;font-size:24px;"></i>
                                <span style="font-size:28px;font-weight:700;color:#fff;"><?php echo $remainingVideos; ?></span>
                            </div>
                            <p style="margin:0;color:#ddd6fe;font-size:13px;">Kalan</p>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <div style="display:flex;justify-content:space-between;font-size:14px;color:#fff;margin-bottom:12px;font-weight:600;">
                            <span><i class="mdi mdi-video-outline" style="margin-right:4px;"></i><?php echo $completedVideos; ?>/<?php echo $totalVideos; ?> Video</span>
                            <span style="padding:4px 12px;border-radius:9999px;background:rgba(255,255,255,0.2);"><?php echo $completion; ?>%</span>
                        </div>
                        <div style="width:100%;border-radius:9999px;height:16px;overflow:hidden;background:rgba(255,255,255,0.2);border:1px solid rgba(255,255,255,0.3);">
                            <div style="height:100%;border-radius:9999px;width:<?php echo $completion; ?>%;background:linear-gradient(90deg,#facc15,#fb923c,#f97316);transition:width 1s;"></div>
                        </div>
                    </div>
                </div>

                <div style="flex-shrink:0;">
                    <div style="position:relative;display:inline-flex;align-items:center;justify-content:center;">
                        <svg width="192" height="192" style="transform:rotate(-90deg);">
                            <circle cx="96" cy="96" r="70" stroke="rgba(255,255,255,0.1)" stroke-width="12" fill="none"/>
                            <circle cx="96" cy="96" r="70" stroke="url(#progressGradient)" stroke-width="12" fill="none"
                                    stroke-dasharray="<?php echo 2 * 3.14159 * 70; ?>"
                                    stroke-dashoffset="<?php echo 2 * 3.14159 * 70 * (1 - $completion / 100); ?>"
                                    stroke-linecap="round"/>
                            <defs>
                                <linearGradient id="progressGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#facc15"/>
                                    <stop offset="50%" style="stop-color:#fb923c"/>
                                    <stop offset="100%" style="stop-color:#f97316"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div style="position:absolute;text-align:center;">
                            <div style="border-radius:50%;padding:24px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);">
                                <div style="display:flex;align-items:baseline;justify-content:center;">
                                    <span style="font-size:48px;font-weight:800;color:#fff;letter-spacing:-0.04em;"><?php echo $completion; ?></span>
                                    <span style="font-size:20px;color:#ddd6fe;font-weight:600;margin-left:4px;">%</span>
                                </div>
                                <p style="margin:8px 0 0;color:#ddd6fe;font-size:12px;font-weight:500;">Tamamlandı</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div style="max-width:1200px;margin:0 auto;padding:0 16px;margin-top:-24px;position:relative;z-index:20;">

        <!-- Stat Cards -->
        <div class="grid-stats anim" style="margin-bottom:24px;">
            <div class="card-hover" style="background:#fff;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06);padding:20px;border:1px solid #f1f5f9;">
                <div style="display:flex;align-items:center;gap:12px;">
                    <div style="width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;background:#ede9fe;">
                        <i class="mdi mdi-play-circle" style="font-size:24px;color:#7c3aed;"></i>
                    </div>
                    <div>
                        <p style="margin:0;font-size:28px;font-weight:800;color:#0f172a;"><?php echo $totalVideos; ?></p>
                        <p style="margin:0;font-size:12px;font-weight:500;color:#64748b;">Toplam Video</p>
                    </div>
                </div>
            </div>
            <div class="card-hover" style="background:#fff;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06);padding:20px;border:1px solid #f1f5f9;">
                <div style="display:flex;align-items:center;gap:12px;">
                    <div style="width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;background:#dcfce7;">
                        <i class="mdi mdi-check-circle" style="font-size:24px;color:#16a34a;"></i>
                    </div>
                    <div>
                        <p style="margin:0;font-size:28px;font-weight:800;color:#0f172a;"><?php echo $completedVideos; ?></p>
                        <p style="margin:0;font-size:12px;font-weight:500;color:#64748b;">Tamamlanan</p>
                    </div>
                </div>
            </div>
            <div class="card-hover" style="background:#fff;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06);padding:20px;border:1px solid #f1f5f9;">
                <div style="display:flex;align-items:center;gap:12px;">
                    <div style="width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;background:#ffedd5;">
                        <i class="mdi mdi-clock-outline" style="font-size:24px;color:#ea580c;"></i>
                    </div>
                    <div>
                        <p style="margin:0;font-size:28px;font-weight:800;color:#0f172a;"><?php echo $remainingVideos; ?></p>
                        <p style="margin:0;font-size:12px;font-weight:500;color:#64748b;">Kalan Video</p>
                    </div>
                </div>
            </div>
            <div class="card-hover" style="background:#fff;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06);padding:20px;border:1px solid #f1f5f9;">
                <div style="display:flex;align-items:center;gap:12px;">
                    <div style="width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;background:<?php echo $allCompleted ? '#fef9c3' : '#f1f5f9'; ?>;">
                        <i class="mdi mdi-certificate" style="font-size:24px;color:<?php echo $allCompleted ? '#ca8a04' : '#94a3b8'; ?>;"></i>
                    </div>
                    <div>
                        <p style="margin:0;font-size:16px;font-weight:700;color:<?php echo $allCompleted ? '#ca8a04' : '#94a3b8'; ?>;">
                            <?php echo $allCompleted ? 'Hazır!' : 'Devam Et'; ?>
                        </p>
                        <p style="margin:0;font-size:12px;font-weight:500;color:#64748b;">Sertifika</p>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($allCompleted): ?>
        <div class="anim anim-d1" style="border-radius:16px;padding:24px;margin-bottom:24px;background:linear-gradient(to right,#f0fdf4,#ecfdf5);border:2px solid #bbf7d0;">
            <div class="cert-layout">
                <div style="width:80px;height:80px;border-radius:16px;display:flex;align-items:center;justify-content:center;background:#dcfce7;flex-shrink:0;">
                    <i class="mdi mdi-trophy-award" style="font-size:36px;color:#16a34a;"></i>
                </div>
                <div style="flex:1;">
                    <h3 style="margin:0 0 4px;font-size:20px;font-weight:700;color:#14532d;">Tebrikler! <?php echo $currentLang['name']; ?> eğitimini tamamladınız!</h3>
                    <p style="margin:0;color:#15803d;font-size:14px;">Sertifikanızı hemen indirebilirsiniz.</p>
                </div>
                <a href="lms-certificate.php" style="flex-shrink:0;background:#16a34a;color:#fff;font-weight:600;padding:12px 24px;border-radius:12px;text-decoration:none;display:inline-flex;align-items:center;gap:8px;">
                    <i class="mdi mdi-download"></i><span>Sertifikayı İndir</span>
                </a>
            </div>
        </div>
        <?php endif; ?>

        <!-- Video Cards -->
        <div class="anim anim-d2" style="margin-bottom:48px;">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px;">
                <div>
                    <h3 style="margin:0;font-size:20px;font-weight:800;color:#0f172a;"><?php echo $currentLang['flag']; ?> <?php echo $currentLang['name']; ?> Videoları</h3>
                    <p style="margin:4px 0 0;font-size:14px;color:#64748b;"><?php echo $completedVideos; ?> / <?php echo $totalVideos; ?> tamamlandı</p>
                </div>
            </div>

            <div class="grid-videos">
                <?php foreach ($videos as $index => $video): ?>
                <div class="video-card card-hover" style="background:#fff;border-radius:16px;box-shadow:0 2px 8px rgba(0,0,0,0.06);overflow:hidden;border:1px solid #f1f5f9;<?php echo $video['completed'] ? 'box-shadow:0 0 0 2px #bbf7d0,0 2px 8px rgba(0,0,0,0.06);' : ''; ?>">
                    <div style="position:relative;overflow:hidden;aspect-ratio:16/9;">
                        <img src="assets/images/course/<?php echo ($index % 12) + 1; ?>.jpg"
                             alt="<?php echo htmlspecialchars($video['title']); ?>"
                             class="video-thumb" style="width:100%;height:100%;object-fit:cover;">

                        <a href="lms-video.php?id=<?php echo $video['id']; ?>&lang=<?php echo $selectedLang; ?>" class="play-overlay" style="position:absolute;inset:0;background:rgba(0,0,0,0.4);display:flex;align-items:center;justify-content:center;">
                            <div style="width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,0.9);display:flex;align-items:center;justify-content:center;box-shadow:0 8px 24px rgba(0,0,0,0.15);">
                                <i class="mdi mdi-play" style="font-size:28px;color:#7c3aed;margin-left:3px;"></i>
                            </div>
                        </a>

                        <?php if ($video['completed']): ?>
                        <div style="position:absolute;top:12px;right:12px;background:#22c55e;color:#fff;font-size:11px;font-weight:600;padding:4px 10px;border-radius:9999px;display:flex;align-items:center;gap:4px;box-shadow:0 2px 8px rgba(0,0,0,0.15);">
                            <i class="mdi mdi-check-circle" style="font-size:14px;"></i><span>Tamamlandı</span>
                        </div>
                        <?php else: ?>
                        <div style="position:absolute;top:12px;right:12px;background:#7c3aed;color:#fff;font-size:11px;font-weight:600;padding:4px 10px;border-radius:9999px;box-shadow:0 2px 8px rgba(0,0,0,0.15);">
                            Video <?php echo $index + 1; ?>
                        </div>
                        <?php endif; ?>

                        <!-- Dil bayrağı -->
                        <div style="position:absolute;top:12px;left:12px;background:rgba(0,0,0,0.6);color:#fff;font-size:13px;padding:4px 10px;border-radius:9999px;display:flex;align-items:center;gap:4px;">
                            <span><?php echo $currentLang['flag']; ?></span>
                            <span style="font-size:11px;font-weight:500;"><?php echo $currentLang['name']; ?></span>
                        </div>

                        <div style="position:absolute;bottom:12px;right:12px;background:rgba(0,0,0,0.7);color:#fff;font-size:12px;padding:4px 8px;border-radius:6px;font-weight:500;">
                            <i class="mdi mdi-clock-outline" style="margin-right:4px;"></i><?php echo gmdate("i:s", $video['duration']); ?>
                        </div>
                    </div>

                    <div style="padding:16px;">
                        <h4 class="line-clamp-2" style="margin:0 0 8px;font-size:15px;font-weight:600;color:#0f172a;line-height:1.4;">
                            <?php echo htmlspecialchars($video['title']); ?>
                        </h4>
                        <p class="line-clamp-2" style="margin:0 0 16px;font-size:13px;color:#64748b;line-height:1.5;">
                            <?php echo htmlspecialchars($video['description']); ?>
                        </p>
                        <div style="display:flex;align-items:center;justify-content:space-between;">
                            <?php if ($video['watched_at']): ?>
                            <span style="font-size:12px;color:#94a3b8;font-weight:500;">
                                <i class="mdi mdi-calendar-check" style="margin-right:4px;"></i><?php echo date('d.m.Y', strtotime($video['watched_at'])); ?>
                            </span>
                            <?php else: ?>
                            <span style="font-size:12px;color:#94a3b8;font-weight:500;">Henüz izlenmedi</span>
                            <?php endif; ?>
                            <a href="lms-video.php?id=<?php echo $video['id']; ?>&lang=<?php echo $selectedLang; ?>"
                               style="display:inline-flex;align-items:center;gap:4px;font-size:14px;font-weight:600;color:<?php echo $video['completed'] ? '#16a34a' : '#7c3aed'; ?>;text-decoration:none;">
                                <span><?php echo $video['completed'] ? 'Tekrar İzle' : 'İzle'; ?></span>
                                <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Footer -->
        <div style="border-top:1px solid #e2e8f0;padding:24px 0;text-align:center;">
            <p style="margin:0;color:#94a3b8;font-size:14px;">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Tüm hakları saklıdır.</p>
        </div>
    </div>
</body>
</html>
