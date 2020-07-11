<?php

require_once '../config/db.php';

$id=$_GET['id'];

mysqli_query($mysqli,"DELETE FROM `request` WHERE `request`.`id_req`='$id'");
header('Location: /catalyst/admin.php');
 ?>
