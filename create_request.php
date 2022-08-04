<?php
require_once '../connect.php';

$location = $_POST['location'];
$adres = $_POST['adres'];
$ls = $_POST['ls'];
$number = $_POST['number'];
$type = $_POST['type'];
$description = $_POST['description'];

mysqli_query($connect, query:"INSERT INTO `request` (`id`,  `location`, `adres`, `ls`, `number`, `type`, `description`) VALUES (NULL, '$location', '$adres', '$ls', '$number', '$type', '$description')");

header( 'Location: ../uved.php');
?>