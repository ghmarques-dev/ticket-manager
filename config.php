<?php
// Database configuration (via Environment Variables)
$db_host = getenv("MYSQLHOST") ?: "localhost";
$db_port = getenv("MYSQLPORT") ?: "3306";
$db_user = getenv("MYSQLUSER") ?: "root";
$db_pass = getenv("MYSQLPASSWORD") ?: "";
$db_name = getenv("MYSQLDATABASE") ?: "itflow";

// Timezone
date_default_timezone_set(getenv("APP_TIMEZONE") ?: "America/Sao_Paulo");

// Start page (depois do login)
$config_start_page = "dashboard";

// Base URL (ajuda a evitar redirects infinitos)
$config_base_url = getenv("APP_URL") ?: "http://localhost";

// Conexão PDO
try {
    $pdo = new PDO(
        "mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8mb4",
        $db_user,
        $db_pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}
