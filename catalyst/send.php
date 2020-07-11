<?php
if (isset($_POST['fio']) && isset($_POST['tel']) && isset($_POST['mail'])){

    // Переменные с формы
    $fio = $_POST['fio'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];

    require_once 'config/db.php';
    $db_table = "request"; // Имя Таблицы БД

    $result = $mysqli->query("INSERT INTO ".$db_table." (name_ord,phone_ord,email_ord, id_status) VALUES ('$fio','$tel','$mail','1')");

    if ($result == true){
    	header("Location: index.php");
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
?>
