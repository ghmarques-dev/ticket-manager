<?php
$db_host = "trolley.proxy.rlwy.net";
$db_port = "16349";
$db_user = "root";
$db_pass = "kmGIovWJucxjLFZxZcicXJaLJpfwwpDd";
$db_name = "railway";

// Timezone
date_default_timezone_set("America/Sao_Paulo");

// Start page (depois do login)
$config_start_page = "dashboard";

// Base URL
$config_base_url = "http://localhost:8000"; // local, pode mudar na Vercel

// Conexão PDO
try {
    $pdo = new PDO(
        "mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8mb4",
        $db_user,
        $db_pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}
