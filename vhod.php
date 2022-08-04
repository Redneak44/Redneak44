<?php

session_start();
require_once '../connect.php';
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

body {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Montserrat, sans-serif;
}
    form{
        margin-top: 200px;
        text-align: center;
        display: flex;
        flex-direction: column;
        width: 400px;
    }
    
.msg{
    border: 2px solid #ffa908;
    border-radius: 3px;
    padding: 5px;
    font-weight: bold;
    width: 200px;
    margin-left: 100px;
    
}
.btn{
    text-align: center;
    width: 200px;
    margin-left: 100px;
}
</style>
<body>
    
    <?php
    if (isset($_SESSION['check_user']));
    session_destroy();
    ?>
    <form action="avtoriz.php" method="post">
    <h2>Войдите</h2>
<div class="form">
<input type="text" name="login" placeholder="Введите логин"><br>
<input type="text" name="password" placeholder="Введите пароль">
</div>
<br>
<button type="submit" class="btn">Войти</button>
<?php

        
            if ($_SESSION && $_SESSION['message']) {
                echo '<div class="msg"> ' . $_SESSION['message'] . ' </div>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>