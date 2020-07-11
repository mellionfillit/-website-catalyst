<?php

require_once '../config/db.php';

$id=$_GET['id'];

mysqli_query($mysqli,"DELETE FROM `orders` WHERE `orders`.`id_ord`='$id'");
header('Location: /catalyst/admin.php');
 ?>
