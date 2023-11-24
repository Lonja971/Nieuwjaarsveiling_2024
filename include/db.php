<?php
define('DB_HOST', '127.0.0.1:3306');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'auction2024');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_error) {
    die('Помилка підключення до БД: ' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');
?>