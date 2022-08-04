<?php
require_once '../../../connect.php';

$id = $_GET['id'];

mysqli_query($connect, query: "DELETE FROM request WHERE `request`.`id` = '$id'");
header('location:view_request.php');
?>