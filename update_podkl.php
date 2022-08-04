<?php
require_once '../../../connect.php';

$projekt_id = $_GET['id'];
$projekt = mysqli_query($connect, query:"SELECT * FROM `podkl` WHERE `id` = '$projekt_id'");
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
<h3>Изменить заявку на подключение</h3>
    <form action="update1.php" method="post">
    <input type="hidden" name="id" value="<?= $projekt ['id'] ?>">
        <p><div class="titles">ФИО:</div><input required type="text" name="fio"  value="<?= $projekt ['fio'] ?>"></p>
        <p><div class="titles">Ваш адрес:</div><input required type="text" name="adres" value="<?= $projekt ['adres'] ?>"></p>
        <p><div class="titles">Номер телефона:</div><input  required = "required" pattern="[0][0-9]{9}" type="number" name="nomer"  value="<?= $projekt ['nomer'] ?>"></p>
        <p><div class="titles">Статус:</div><select required type="text" name="status" value="<?= $projekt ['status'] ?>"></p>
        <option>Открыто </option>
    <option>Закрыто</option>
    <option>В процессе</option>
        </select>
       
        <button type="submit">Изменить заявку</button>
    </form>
</body>
</html>