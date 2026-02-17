<?php
require_once 'config.php';
require_once 'php/auth.php';

$auth = new Auth();
$auth->logout();

header('Location: login.php');
exit;
?>
