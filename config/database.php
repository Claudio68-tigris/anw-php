<?php
/**
 * Database configuration file.
 */
define('DB_HOST', 'localhost');
define('DB_NAME', 'anw_banco_estudo');
define('DB_USER', 'root');
define('DB_PASS', 'hagnarock');
/**
 * Establish a database connection using PDO.
 * This connection will be used throughout the application.
 */
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Log the error to a file in production, instead of displaying it.
    error_log("Database connection failed: " . $e->getMessage());
    die("Erro de conexão com o banco de dados. Tente novamente mais tarde.");
}
