<?php
require_once 'config.php';
require_once 'php/auth.php';

$auth = new Auth();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($auth->login($email, $password)) {
        header('Location: lms-dashboard.php');
        exit;
    } else {
        $error = 'E-posta veya şifre hatalı!';
    }
}

if ($auth->isLoggedIn()) {
    header('Location: lms-dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Giriş Yap</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body style="background:linear-gradient(135deg,#4338ca 0%,#6d28d9 40%,#a855f7 100%);min-height:100vh;display:flex;align-items:center;justify-content:center;padding:16px;position:relative;overflow:hidden;">

    <!-- Background shapes -->
    <div style="position:absolute;width:300px;height:300px;border-radius:50%;background:rgba(255,255,255,0.06);top:-80px;right:-80px;"></div>
    <div style="position:absolute;width:250px;height:250px;border-radius:50%;background:rgba(255,255,255,0.04);bottom:-60px;left:-60px;"></div>
    <div style="position:absolute;width:150px;height:150px;border-radius:50%;background:rgba(255,255,255,0.05);top:40%;left:8%;"></div>
    <div style="position:absolute;width:100px;height:100px;border-radius:50%;background:rgba(255,255,255,0.03);top:20%;right:20%;"></div>

    <!-- Login Card -->
    <div style="background:rgba(255,255,255,0.12);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);border:1px solid rgba(255,255,255,0.2);border-radius:24px;padding:48px 40px;width:100%;max-width:420px;box-shadow:0 8px 32px rgba(0,0,0,0.2);position:relative;z-index:10;">

        <!-- Logo -->
        <div style="text-align:center;margin-bottom:32px;">
            <div style="display:inline-flex;align-items:center;justify-content:center;width:72px;height:72px;background:rgba(255,255,255,0.15);border-radius:50%;border:1px solid rgba(255,255,255,0.25);margin-bottom:16px;">
                <img src="assets/images/logo-icon-64.png" alt="MultiTalk" style="width:44px;height:44px;">
            </div>
            <h1 style="font-size:32px;font-weight:700;color:#fff;margin:0 0 8px 0;">Giriş Yap</h1>
            <p style="color:rgba(255,255,255,0.7);font-size:14px;margin:0;">MultiTalk hesabınıza giriş yapın</p>
        </div>

        <?php if ($error): ?>
        <div style="background:rgba(239,68,68,0.2);border:1px solid rgba(239,68,68,0.3);color:#fff;padding:12px 16px;border-radius:12px;margin-bottom:20px;font-size:14px;">
            <i class="mdi mdi-alert-circle" style="margin-right:6px;"></i><?php echo htmlspecialchars($error); ?>
        </div>
        <?php endif; ?>

        <!-- Form -->
        <form method="POST">
            <!-- Email -->
            <div style="margin-bottom:20px;">
                <label style="display:block;color:rgba(255,255,255,0.85);font-size:13px;font-weight:600;margin-bottom:8px;">E-posta</label>
                <input type="email" name="email" required placeholder="ornek@email.com"
                       style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.25);border-radius:12px;color:#fff;font-size:14px;outline:none;box-sizing:border-box;"
                       onfocus="this.style.borderColor='rgba(255,255,255,0.5)';this.style.background='rgba(255,255,255,0.2)'"
                       onblur="this.style.borderColor='rgba(255,255,255,0.25)';this.style.background='rgba(255,255,255,0.15)'">
            </div>

            <!-- Password -->
            <div style="margin-bottom:16px;">
                <label style="display:block;color:rgba(255,255,255,0.85);font-size:13px;font-weight:600;margin-bottom:8px;">Şifre</label>
                <input type="password" name="password" required placeholder="••••••••"
                       style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.25);border-radius:12px;color:#fff;font-size:14px;outline:none;box-sizing:border-box;"
                       onfocus="this.style.borderColor='rgba(255,255,255,0.5)';this.style.background='rgba(255,255,255,0.2)'"
                       onblur="this.style.borderColor='rgba(255,255,255,0.25)';this.style.background='rgba(255,255,255,0.15)'">
            </div>

            <!-- Forgot Password -->
            <div style="text-align:right;margin-bottom:24px;">
                <a href="forgot-password.php" style="color:rgba(255,255,255,0.7);font-size:13px;text-decoration:none;">Şifremi Unuttum?</a>
            </div>

            <!-- Submit -->
            <button type="submit" 
                    style="width:100%;padding:14px;background:rgba(255,255,255,0.25);border:1px solid rgba(255,255,255,0.35);border-radius:12px;color:#fff;font-size:15px;font-weight:600;cursor:pointer;transition:all 0.3s;"
                    onmouseover="this.style.background='rgba(255,255,255,0.35)'"
                    onmouseout="this.style.background='rgba(255,255,255,0.25)'">
                Giriş Yap
            </button>
        </form>

        <!-- Register -->
        <p style="text-align:center;color:rgba(255,255,255,0.7);font-size:14px;margin:0 0 16px 0;">
            Hesabınız yok mu? <a href="signup.php" style="color:#fff;font-weight:600;text-decoration:none;">Kayıt Olun</a>
        </p>

        <!-- Back -->
        <p style="text-align:center;margin:0 0 20px 0;">
            <a href="index.php" style="display:inline-flex;align-items:center;gap:6px;color:rgba(255,255,255,0.85);font-size:14px;font-weight:500;text-decoration:none;padding:10px 20px;border-radius:12px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);transition:all 0.2s;"
               onmouseover="this.style.background='rgba(255,255,255,0.2)'"
               onmouseout="this.style.background='rgba(255,255,255,0.1)'">
                <i class="mdi mdi-arrow-left"></i> Ana Sayfaya Dön
            </a>
        </p>

        <!-- Demo -->
        <div style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);border-radius:12px;padding:12px 16px;">
            <p style="color:rgba(255,255,255,0.6);font-size:11px;font-weight:600;margin:0 0 4px 0;">
                <i class="mdi mdi-information"></i> Demo Hesap
            </p>
            <p style="color:rgba(255,255,255,0.8);font-size:12px;margin:0;font-family:monospace;">
                demo@test.com / 123456
            </p>
        </div>
    </div>

</body>
</html>
