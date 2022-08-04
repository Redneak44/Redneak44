<?php
session_start();
$connect = mysqli_connect(hostname:'localhost', username:'root', password:'root', database:'project' );
if (!$connect){
    die('Error connect to database');
}
?>
