<?php
require_once '../connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    body{
        font-family: Montserrat, sans-serif;
    }
    .header {
  width: 100%;
  padding: 20px 0 20px 0;
  position: relative;
  z-index: 1000;
  background-color: #008b8b;
}
.nav {
  color: #66697e;
  font-size: 18px;
  font-weight: 700;
  text-transform: uppercase;
  width: 100%;
}

.nav_link {
  margin-left: 30px;
  color: #000;
  text-decoration: none;
  transition: opacity .1s;
}
.nav_link:hover {
color: #fff;
opacity: 1;
}
.exit{
position: absolute;
transition: opacity .1s;
right: 10%;
color: #000;
text-decoration: none;
}
.exit:hover{
    color: #fff; 
    opacity: 1; 
}
.titles{
	width: 200px;
    height: 21px;
	float: left;
    background-color: #008b8b;
    text-align: left;
    border-radius: 2px;
    margin-right: 10px;
  

}

#form input, select{
    border-radius: 2px;
    border-color: #000;
	width: 300px;
    height: 21px;

}
button{
    margin-left: 40px;
    margin-top: 0;
    position: absolute;
    height: 25px;
    background-color: #66ff;
    border: 0px;
    border-radius: 4px;
    color: #000;
}
button:hover{
    color: #fff; 
    opacity: 0.8; 
}
</style>
<body>
<header class="header">
<nav class="nav">
<a class="nav_link"  href="../index.php">Создать другую заявку</a>
<a class="exit" href="../index.php">Выход</a>
</nav>
</header>
    <h3>Создать новую заявку</h3>
    <form action="create_request.php" method="post" id="form">
        <p><div class="titles">Наименование локации:</div><select required type="text" name="location">
    <option></option>
    <option>Карагачевая роща</option>
    <option>Дордой</option>
    <option>Алтын-ордо</option>
    <option>Маевка</option>
    <option>Военоантоновка</option>
</select> </p>
        <p><div class="titles">Адрес:</div><input required type="text" name="adres"></p>
        <p><div class="titles">Лицевой счет:</div><input required pattern="[0-9]{,6}" type="number" name="ls"></p>
        <p><div class="titles">Номер телефона:</div><input  required pattern="[0][0-9]{9}" type="number" name="number"></p>
        <p><div class="titles">Тип обращения:</div><select required type="text" name="type"></p>
        <option> </option>
    <option>Установка ТВ</option>
    <option>Низкая скорость</option>
    <option>Жду монтажников</option>
    <option>Жду специалиста</option>
    <option>Некорректно работает роутер</option>
        </select>
        <p><div class="titles">Опишите более подробно:</div></p>
        <textarea required name="description" cols="50" rows="5"></textarea><br>
        <button type="submit">Добавить заявку</button>
    </form>
    </div>
</body>
</html>