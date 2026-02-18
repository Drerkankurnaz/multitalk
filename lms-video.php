<?php
require_once 'config.php';
require_once 'php/auth.php';
require_once 'php/video.php';

$auth = new Auth();
if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}

global $LANGUAGES;
$selectedLang = $_GET['lang'] ?? $_SESSION['selected_lang'] ?? 'tr';
if (!array_key_exists($selectedLang, $LANGUAGES)) $selectedLang = 'tr';
$_SESSION['selected_lang'] = $selectedLang;
$currentLang = $LANGUAGES[$selectedLang];

$videoManager = new Video();
$video_id = $_GET['id'] ?? 0;
$video = $videoManager->getVideoById($video_id);

if (!$video) {
    header('Location: lms-dashboard.php?lang=' . $selectedLang);
    exit;
}

// Video tamamlandı işareti
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['complete'])) {
    $videoManager->markAsCompleted($_SESSION['user_id'], $video_id, $selectedLang);
    header('Location: lms-dashboard.php?lang=' . $selectedLang);
    exit;
}

$allVideos = $videoManager->getUserProgress($_SESSION['user_id'], $selectedLang);
$currentIndex = array_search($video_id, array_column($allVideos, 'id'));
$nextVideo = $allVideos[$currentIndex + 1] ?? null;
$prevVideo = $allVideos[$currentIndex - 1] ?? null;
$completedCount = count(array_filter($allVideos, fn($v) => $v['completed']));
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - <?php echo $currentLang['name']; ?> Video</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; box-sizing: border-box; }
        body { margin: 0; -webkit-font-smoothing: antialiased; }
        .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .sidebar-item { transition: all 0.2s; }
        .sidebar-item:hover { background: #f8fafc; }
        .main-layout { display: flex; flex-direction: column; gap: 20px; }
        .video-col { flex: 1; }
        .sidebar-col { width: 100%; }
        .nav-sub { display: none; }
        @media (min-width: 1024px) {
            .main-layout { flex-direction: row; gap: 24px; }
            .video-col { flex: 2; }
            .sidebar-col { width: 360px; flex-shrink: 0; }
            .nav-sub { display: block; }
        }
    </style>
</head>
<body style="background:#f8fafc;min-height:100vh;">

    <!-- Navbar -->
    <nav style="background:rgba(255,255,255,0.97);border-bottom:1px solid #e2e8f0;position:sticky;top:0;z-index:50;">
        <div style="max-width:1200px;margin:0 auto;padding:0 16px;">
            <div style="display:flex;align-items:center;justify-content:space-between;height:56px;">
                <div style="display:flex;align-items:center;gap:12px;">
                    <a href="lms-dashboard.php?lang=<?php echo $selectedLang; ?>" style="color:#7c3aed;font-size:20px;text-decoration:none;">
                        <i class="mdi mdi-arrow-left"></i>
                    </a>
                    <div style="width:1px;height:24px;background:#e2e8f0;"></div>
                    <div>
                        <h1 style="margin:0;font-size:16px;font-weight:700;color:#7c3aed;">MultiTalk</h1>
                        <p class="nav-sub" style="margin:0;font-size:11px;color:#94a3b8;"><?php echo $currentLang['flag']; ?> <?php echo $currentLang['name']; ?></p>
                    </div>
                </div>
                <a href="lms-logout.php" style="color:#94a3b8;font-size:18px;text-decoration:none;" title="Çıkış">
                    <i class="mdi mdi-logout"></i>
                </a>
            </div>
        </div>
    </nav>

    <div style="max-width:1200px;margin:0 auto;padding:20px 16px;">
        <div class="main-layout">
            <!-- Video Column -->
            <div class="video-col">
                <!-- Video Card -->
                <div style="background:#fff;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06);overflow:hidden;margin-bottom:20px;">
                    <!-- Header -->
                    <div style="background:linear-gradient(135deg,#7c3aed,#c026d3);padding:20px;">
                        <div style="display:flex;align-items:start;justify-content:space-between;gap:16px;">
                            <div style="flex:1;">
                                <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
                                    <span style="background:rgba(255,255,255,0.2);color:#fff;font-size:12px;padding:4px 10px;border-radius:6px;">
                                        <?php echo $currentLang['flag']; ?> Video <?php echo $currentIndex + 1; ?>/<?php echo count($allVideos); ?>
                                    </span>
                                    <span style="color:rgba(255,255,255,0.7);font-size:13px;">
                                        <i class="mdi mdi-clock-outline"></i> <?php echo gmdate("i:s", $video['duration']); ?> dk
                                    </span>
                                </div>
                                <h1 style="margin:0 0 8px;font-size:clamp(18px,3vw,28px);font-weight:800;color:#fff;">
                                    <?php echo htmlspecialchars($video['title']); ?>
                                </h1>
                                <p style="margin:0;color:rgba(255,255,255,0.8);font-size:14px;">
                                    <?php echo htmlspecialchars($video['description']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Player -->
                    <div style="background:#000;">
                        <?php
                        $videoUrl = $video['video_url'];
                        $isVimeo = strpos($videoUrl, 'vimeo.com') !== false;
                        if ($isVimeo): ?>
                        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                            <iframe id="videoPlayer" src="<?php echo htmlspecialchars($videoUrl); ?>?autoplay=0&title=0&byline=0&portrait=0" 
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;border:none;" 
                                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <?php else: ?>
                        <video id="videoPlayer" style="width:100%;aspect-ratio:16/9;display:block;" controls>
                            <source src="<?php echo htmlspecialchars($videoUrl); ?>" type="video/mp4">
                            Tarayıcınız video etiketini desteklemiyor.
                        </video>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Altyazı / Diyalog Paneli -->
                <?php if (!empty($video['subtitle_text'])): ?>
                <div id="subtitlePanel" style="background:#fff;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06);overflow:hidden;margin-bottom:20px;">
                    <!-- Altyazı Header -->
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:16px 20px;border-bottom:1px solid #e2e8f0;cursor:pointer;" onclick="toggleSubtitle()">
                        <div style="display:flex;align-items:center;gap:10px;">
                            <div style="width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#7c3aed,#c026d3);display:flex;align-items:center;justify-content:center;">
                                <i class="mdi mdi-subtitles-outline" style="color:#fff;font-size:18px;"></i>
                            </div>
                            <div>
                                <h3 style="margin:0;font-size:15px;font-weight:700;color:#0f172a;">
                                    <?php echo $currentLang['flag']; ?> Diyalog Metni
                                </h3>
                                <p style="margin:0;font-size:12px;color:#94a3b8;">Altyazı / Subtitle</p>
                            </div>
                        </div>
                        <div style="display:flex;align-items:center;gap:8px;">
                            <span id="subtitleFontLabel" style="font-size:11px;color:#94a3b8;background:#f1f5f9;padding:3px 8px;border-radius:6px;">Normal</span>
                            <i id="subtitleArrow" class="mdi mdi-chevron-down" style="color:#94a3b8;font-size:22px;transition:transform 0.3s;"></i>
                        </div>
                    </div>
                    <!-- Altyazı İçerik -->
                    <div id="subtitleContent" style="padding:0 20px 20px;display:block;">
                        <!-- Kontroller -->
                        <div style="display:flex;flex-wrap:wrap;align-items:center;gap:8px;padding:12px 0;border-bottom:1px solid #f1f5f9;margin-bottom:12px;">
                            <button onclick="changeSubFontSize(-1)" style="width:32px;height:32px;border-radius:8px;border:1px solid #e2e8f0;background:#f8fafc;cursor:pointer;font-size:14px;display:flex;align-items:center;justify-content:center;color:#64748b;" title="Küçült">A-</button>
                            <button onclick="changeSubFontSize(1)" style="width:32px;height:32px;border-radius:8px;border:1px solid #e2e8f0;background:#f8fafc;cursor:pointer;font-size:14px;display:flex;align-items:center;justify-content:center;color:#64748b;" title="Büyüt">A+</button>
                            <div style="width:1px;height:20px;background:#e2e8f0;"></div>
                            <button onclick="toggleHighlight()" id="highlightBtn" style="height:32px;padding:0 10px;border-radius:8px;border:1px solid #e2e8f0;background:#f8fafc;cursor:pointer;font-size:12px;display:flex;align-items:center;gap:4px;color:#64748b;" title="Satır vurgulama">
                                <i class="mdi mdi-format-color-highlight"></i> Vurgula
                            </button>
                            <button onclick="copySubtitle()" style="height:32px;padding:0 10px;border-radius:8px;border:1px solid #e2e8f0;background:#f8fafc;cursor:pointer;font-size:12px;display:flex;align-items:center;gap:4px;color:#64748b;" title="Kopyala">
                                <i class="mdi mdi-content-copy"></i> Kopyala
                            </button>
                        </div>
                        <!-- Diyalog Satırları -->
                        <div id="subtitleLines" style="font-size:15px;line-height:2;">
                            <?php
                            $rawText = $video['subtitle_text'];
                            // Hem gerçek newline hem de literal \n'yi destekle
                            $rawText = str_replace("\\n", "\n", $rawText);
                            $lines = explode("\n", $rawText);
                            foreach ($lines as $idx => $line):
                                $line = trim($line);
                                if (empty($line)) continue;
                                $isPersonA = ($idx % 2 === 0);
                                $dotColor = $isPersonA ? '#7c3aed' : '#c026d3';
                                $bgColor = $isPersonA ? '#f5f3ff' : '#fdf4ff';
                            ?>
                            <div class="subtitle-line" style="padding:8px 12px;border-radius:10px;margin-bottom:6px;background:<?php echo $bgColor; ?>;transition:all 0.2s;cursor:pointer;" onmouseover="this.style.transform='translateX(4px)'" onmouseout="this.style.transform='translateX(0)'">
                                <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:<?php echo $dotColor; ?>;margin-right:8px;vertical-align:middle;"></span>
                                <span style="color:#1e293b;"><?php echo htmlspecialchars($line); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Controls -->
                <div style="background:#fff;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06);padding:16px;display:flex;flex-wrap:wrap;gap:12px;align-items:center;">
                    <div style="display:flex;gap:12px;flex:1;">
                        <?php if ($prevVideo): ?>
                        <a href="lms-video.php?id=<?php echo $prevVideo['id']; ?>&lang=<?php echo $selectedLang; ?>"
                           style="padding:10px 20px;background:#f1f5f9;color:#334155;font-weight:500;border-radius:12px;text-decoration:none;font-size:14px;display:inline-flex;align-items:center;gap:4px;">
                            <i class="mdi mdi-chevron-left"></i> Önceki
                        </a>
                        <?php endif; ?>
                        <?php if ($nextVideo): ?>
                        <a href="lms-video.php?id=<?php echo $nextVideo['id']; ?>&lang=<?php echo $selectedLang; ?>"
                           style="padding:10px 20px;background:#f1f5f9;color:#334155;font-weight:500;border-radius:12px;text-decoration:none;font-size:14px;display:inline-flex;align-items:center;gap:4px;">
                            Sonraki <i class="mdi mdi-chevron-right"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                    <form method="POST" id="completeForm">
                        <button type="submit" name="complete"
                                style="padding:10px 24px;background:linear-gradient(135deg,#16a34a,#059669);color:#fff;font-weight:600;border-radius:12px;border:none;cursor:pointer;font-size:14px;display:inline-flex;align-items:center;gap:6px;">
                            <i class="mdi mdi-check-circle"></i> Tamamlandı İşaretle
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="sidebar-col">
                <div style="background:#fff;border-radius:16px;box-shadow:0 4px 12px rgba(0,0,0,0.06);padding:16px;position:sticky;top:76px;">
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;">
                        <h3 style="margin:0;font-size:16px;font-weight:700;color:#0f172a;"><?php echo $currentLang['flag']; ?> Kurs İçeriği</h3>
                        <span style="font-size:12px;color:#64748b;background:#f1f5f9;padding:4px 10px;border-radius:9999px;">
                            <?php echo $completedCount; ?>/<?php echo count($allVideos); ?>
                        </span>
                    </div>
                    <div style="max-height:calc(100vh - 200px);overflow-y:auto;">
                        <?php foreach ($allVideos as $i => $v): ?>
                        <a href="lms-video.php?id=<?php echo $v['id']; ?>&lang=<?php echo $selectedLang; ?>"
                           class="sidebar-item" style="display:block;text-decoration:none;padding:10px;border-radius:10px;margin-bottom:4px;<?php echo $v['id'] == $video_id ? 'background:#f5f3ff;border:2px solid #c4b5fd;' : 'border:2px solid transparent;'; ?>">
                            <div style="display:flex;align-items:start;gap:10px;">
                                <div style="width:28px;height:28px;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;flex-shrink:0;<?php echo $v['id'] == $video_id ? 'background:#7c3aed;color:#fff;' : 'background:#e2e8f0;color:#64748b;'; ?>">
                                    <?php echo $i + 1; ?>
                                </div>
                                <div style="flex:1;min-width:0;">
                                    <h4 class="line-clamp-2" style="margin:0 0 4px;font-size:13px;font-weight:600;color:<?php echo $v['id'] == $video_id ? '#7c3aed' : '#334155'; ?>;">
                                        <?php echo htmlspecialchars($v['title']); ?>
                                    </h4>
                                    <div style="display:flex;align-items:center;justify-content:space-between;">
                                        <span style="font-size:11px;color:#94a3b8;">
                                            <i class="mdi mdi-clock-outline"></i> <?php echo gmdate("i:s", $v['duration']); ?>
                                        </span>
                                        <?php if ($v['completed']): ?>
                                        <i class="mdi mdi-check-circle" style="color:#16a34a;font-size:16px;"></i>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
        const form = document.getElementById('completeForm');
        <?php if ($isVimeo): ?>
        const iframe = document.getElementById('videoPlayer');
        const vimeoPlayer = new Vimeo.Player(iframe);
        vimeoPlayer.on('ended', function() {
            if (confirm('Video tamamlandı! Tamamlandı olarak işaretlensin mi?')) {
                form.submit();
            }
        });
        <?php else: ?>
        const video = document.getElementById('videoPlayer');
        video.addEventListener('ended', function() {
            if (confirm('Video tamamlandı! Tamamlandı olarak işaretlensin mi?')) {
                form.submit();
            }
        });
        <?php endif; ?>

        // Altyazı fonksiyonları
        let subFontSize = 15;
        let subtitleOpen = true;
        let highlightActive = false;

        function toggleSubtitle() {
            const content = document.getElementById('subtitleContent');
            const arrow = document.getElementById('subtitleArrow');
            subtitleOpen = !subtitleOpen;
            content.style.display = subtitleOpen ? 'block' : 'none';
            arrow.style.transform = subtitleOpen ? 'rotate(0deg)' : 'rotate(-90deg)';
        }

        function changeSubFontSize(delta) {
            subFontSize = Math.max(12, Math.min(24, subFontSize + delta));
            const lines = document.getElementById('subtitleLines');
            if (lines) {
                lines.style.fontSize = subFontSize + 'px';
                const label = document.getElementById('subtitleFontLabel');
                if (subFontSize <= 13) label.textContent = 'Küçük';
                else if (subFontSize <= 16) label.textContent = 'Normal';
                else if (subFontSize <= 19) label.textContent = 'Büyük';
                else label.textContent = 'Çok Büyük';
            }
        }

        function toggleHighlight() {
            highlightActive = !highlightActive;
            const btn = document.getElementById('highlightBtn');
            btn.style.background = highlightActive ? '#7c3aed' : '#f8fafc';
            btn.style.color = highlightActive ? '#fff' : '#64748b';
            btn.style.borderColor = highlightActive ? '#7c3aed' : '#e2e8f0';
            const allLines = document.querySelectorAll('.subtitle-line');
            allLines.forEach(function(line) {
                if (highlightActive) {
                    line.onmouseover = function() { this.style.background='#fef3c7'; this.style.transform='translateX(4px)'; };
                    line.onmouseout = function() { this.style.background = (Array.from(allLines).indexOf(this) % 2 === 0) ? '#f5f3ff' : '#fdf4ff'; this.style.transform='translateX(0)'; };
                } else {
                    line.onmouseover = function() { this.style.transform='translateX(4px)'; };
                    line.onmouseout = function() { this.style.transform='translateX(0)'; };
                }
            });
        }

        function copySubtitle() {
            const lines = document.querySelectorAll('.subtitle-line span:last-child');
            let text = '';
            lines.forEach(function(s) { text += s.textContent.trim() + '\n'; });
            navigator.clipboard.writeText(text).then(function() {
                alert('Diyalog metni kopyalandı!');
            });
        }
    </script>
</body>
</html>
