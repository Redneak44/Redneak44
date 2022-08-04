<?php
require_once '../../../connect.php';
$id = $_POST['id'];
$fio = $_POST['fio'];
$adres = $_POST['adres'];
$nomer = $_POST['nomer'];
$type = $_POST['type'];
$description = $_POST['description'];
$status = $_POST ['status'];
mysqli_query($connect, query:"UPDATE `jaloby` SET `fio` = ' $fio', `adres` = '$adres', `nomer` = '$nomer', `type` = '$type', `description` = '$description', `status` = '$status' WHERE `jaloby`.`id` = '$id'" );
header ('location:view_jaloby.php');
?> 