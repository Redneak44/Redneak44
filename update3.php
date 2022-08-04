<?php
require_once '../../../connect.php';
$id = $_POST['id'];
$location = $_POST['location'];
$adres = $_POST['adres'];
$ls = $_POST['ls'];
$number = $_POST['number'];
$type = $_POST['type'];
$description = $_POST['description'];
$status = $_POST['status'];
mysqli_query($connect, query:"UPDATE `request` SET `location` = ' $location', `adres` = '$adres', `ls` = '$ls', `number` = '$number', `type` = '$type' , `description` = '$description', `status`= '$status' WHERE `request`.`id` = '$id'" );
header ('location:view_request.php');
?> 