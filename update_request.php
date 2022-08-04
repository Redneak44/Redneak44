<?php
require_once '../../../connect.php';

$projekt_id = $_GET['id'];
$projekt = mysqli_query($connect, query:"SELECT * FROM `request` WHERE `id` = '$projekt_id'");
$projekt = mysqli_fetch_assoc($projekt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменить заявку на подключение</title>
</head>
<style>

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
body{
        font-family: Montserrat, sans-serif;
    }
</style>

<body>
<h3>Изменить заявку</h3>
    <form action="update3.php" method="post">
    <input type="hidden" name="id" value="<?= $projekt ['id'] ?>">
    <p><div class="titles">Наименование локации:</div><select required type="text" name="location" value="<?= $projekt ['location'] ?>">
    <option></option>
    <option>Карагачевая роща</option>
    <option>Дордой</option>
    <option>Алтын-ордо</option>
    <option>Маевка</option>
    <option>Военоантоновка</option>
</select> </p>
        <p><div class="titles">Адрес:</div><input required type="text" name="adres" value="<?= $projekt ['adres'] ?>"></p>
        <p><div class="titles">Лицевой счет:</div><input required pattern="[0-9]{,6}" type="number" name="ls" value="<?= $projekt ['ls'] ?>"></p>
        <p><div class="titles">Номер телефона:</div><input  required  type="text" name="number" value="<?=$projekt ['number'] ?>"></p>
        <p><div class="titles">Тип обращения:</div><select required type="text" name="type" value="<?= $projekt ['type'] ?>"></p>
        <option> </option>
    <option>Установка ТВ</option>
    <option>Низкая скорость</option>
    <option>Жду монтажников</option>
    <option>Жду специалиста</option>
    <option>Некорректно работает роутер</option>
        </select>
        <p><div class="titles">Опишите более подробно:</div></p>
        <textarea required name="description" cols="50" rows="5"><?= $projekt ['description'] ?></textarea><br>
        <p><div class="titles">Статус:</div><select required type="text" name="status" value="<?= $projekt ['status'] ?>"></p>
        <option>Открыто </option>
        <option>Закрыто</option>
        <option>В процессе</option>
        </select><br><br>
        <button type="submit">Изменить заявку</button>
        
    </form>
</body>
</html>