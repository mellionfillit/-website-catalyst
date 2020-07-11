<?php
// Параметры для подключения
$db_host = "localhost:3307";
$db_user = "admin"; // Логин БД
$db_password = "admin"; // Пароль БД
$db_base = 'ctlst'; // Имя БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
  die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
