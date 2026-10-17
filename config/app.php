<?php
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptPath = dirname($_SERVER['SCRIPT_NAME'] ?? '');

// Try to build dynamic BASE_URL reliably
$docRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$appRoot = str_replace('\\', '/', dirname(__DIR__));
$baseDir = str_replace($docRoot, '', $appRoot);
if (substr($baseDir, 0, 1) !== '/' && $baseDir !== '') {
    $baseDir = '/' . $baseDir;
}
$host = "http://localhost/~anselmo/anw1";
//$baseUrl = $protocol . "://" . $host . $baseDir;
$baseUrl = $host;
define('BASE_URL', $baseUrl);
define('APP_INSTALLED', true);
define('RESEND_API_KEY', 're_AeMzz7U7_AKFPa9DceHmoYRDiEMaJNZvV');
define('MAIL_FROM', 'dev@acompanhantesnaweb.com.br');
