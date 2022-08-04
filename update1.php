<?php
require_once '../../../connect.php';
$id = $_POST['id'];
$fio = $_POST['fio'];
$adres = $_POST['adres'];
$nomer = $_POST['nomer'];
$status = $_POST ['status'];
mysqli_query($connect, query:"UPDATE `podkl` SET `fio` = ' $fio', `adres` = '$adres', `nomer` = '$nomer', `status` = '$status' WHERE `podkl`.`id` = '$id'" );
header ('location:view_podkl.php');
?> 