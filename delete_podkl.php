<?php
require_once '../../../connect.php';

$id = $_GET['id'];

mysqli_query($connect, query: "DELETE FROM podkl WHERE `podkl`.`id` = '$id'");
header('location:view_podkl.php');
?>