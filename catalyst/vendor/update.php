<?php

require_once '../config/db.php';

$id_ord=$_POST['id_ord'];
$name_ord=$_POST['name_ord'];
$phone_ord=$_POST['phone_ord'];
$email_ord=$_POST['email_ord'];
$id_type_prod=$_POST['id_type_prod'];
$id_mark_avto=$_POST['id_mark_avto'];
$ord_details=$_POST['ord_details'];
$weight_prod=$_POST['weight_prod'];
$id_status_prod=$_POST['id_status_prod'];

mysqli_query($mysqli,"UPDATE `orders` SET name_ord='$name_ord',
phone_ord='$phone_ord',email_ord='$email_ord',id_type_prod='$id_type_prod',
id_mark_avto='$id_mark_avto',ord_details='$ord_details',weight_prod='$weight_prod',
id_status_prod='$id_status_prod' WHERE orders.id_ord='$id_ord'");

header('Location: /catalyst/admin.php');


 ?>
