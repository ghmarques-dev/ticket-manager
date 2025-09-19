<?php
$config_host = "mysql.railway.internal"; 
$config_user = "root";
$config_pass = "woFeBgooEKkajelOXfKgNnsFgSfJCaei";
$config_db   = "railway";
$config_port = 3306;     

$config_start_page = "dashboard";

date_default_timezone_set("America/Sao_Paulo");

$mysqli = new mysqli($config_host, $config_user, $config_pass, $config_db, $config_port);
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
