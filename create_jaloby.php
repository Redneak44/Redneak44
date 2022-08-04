<?php
require_once '../connect.php';

$fio = $_POST['fio'];
$adres = $_POST['adres'];
$nomer = $_POST['nomer'];
$type = $_POST['type'];
$description = $_POST['description'];

mysqli_query($connect, query:"INSERT INTO `jaloby` (`id`, `fio`, `adres`, `nomer`, `type`, `description`) VALUES (NULL, '$fio', '$adres', '$nomer', '$type', '$description')");

header( 'Location: ../uved.php');
?>