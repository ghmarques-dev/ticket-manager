<?php
// Database configuration
$db_host = "metro.proxy.rlwy.net";
$db_port = "35713";
$db_user = "root";
$db_pass = "afAxARGPUsVwpFldUhleEmcqeAKmOnKa";
$db_name = "railway";

// Timezone
date_default_timezone_set("America/Sao_Paulo");

// Start page (depois do login)
$config_start_page = "dashboard";

// (Opcional) Se a aplicação pedir base URL, pode forçar:
$config_base_url = "https://ticket-manager-tawny.vercel.app";

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
