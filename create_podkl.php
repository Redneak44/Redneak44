<?php
require_once '../connect.php';

$fio = $_POST['fio'];
$adres = $_POST['adres'];
$nomer = $_POST['nomer'];

mysqli_query($connect, query:"INSERT INTO `podkl` (`id`, `fio`, `adres`, `nomer`) VALUES (NULL, '$fio', '$adres', '$nomer')");

header( 'Location: ../uved.php');
?>