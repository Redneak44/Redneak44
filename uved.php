<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family: Montserrat, sans-serif;
    }
    .uved{
        background-color: #66ff;
        width: 400px;
        height: 50px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
        padding: 100px;
        padding-top: 50px;
        color: #fff;
        font-size: 30px;
        text-transform: uppercase;
    }
    .a{
        background-color: #66ff;
        width: 80px;
        height: 15px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        border-radius: 2px;
        padding: 5px;
        padding-top: 8px;
        color: #fff;
        font-size: 12px;
        text-transform: uppercase;
        text-decoration: none;
    }
    .a:hover{
        opacity: 0.5 ;
    }
    a{
        text-decoration: none;
        color: #fff;
    }
</style>

<body>
    <div class="uved">Ваша заявка принята, пожалуйста ожидайте звонка</div>
    <div class="a"><a href="index.php">Назад</a></div>
</body>
</html>