<?php
require_once '../../../connect.php';

$id = $_GET['id'];

mysqli_query($connect, query: "DELETE FROM jaloby WHERE `jaloby`.`id` = '$id'");
header('location:view_jaloby.php');
?>