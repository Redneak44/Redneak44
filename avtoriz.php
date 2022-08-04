<?php
session_start();
require '../connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "password" => $user['password'],
        ];

        header('Location:view/podkl/view_podkl.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location:vhod.php');
    }
 ?>