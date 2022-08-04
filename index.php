<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Document</title>
</head>

<style>
    body{
        font-family: Montserrat, sans-serif;
    }
    .best{
    width: 100%;
    height: 150px;
    margin-left: auto;
    margin-right: auto;
    font-size: 40px;
    padding: 50px;
    text-align: center;
    color: rgb(112, 190, 241);
}
.tarify{
    width: auto;
    height: 500px;
}
.tarify_inner{
    width: auto;
    height: 500px;
    justify-content: center;
    display: flex;
}
.tarify_link{
    height: 400px;
    width: 330px;
    background-color:#fff;
    margin-left: 50px;
    border-radius: 8px;
    border: 1px solid black;
}
.iconn{
   padding-top: 20px;
   padding-left: 15px;
}
.icon{
    display: flex;
    height: 80px;
    width: 100%;
}
.icon_link{
    margin-top: 30px;
    margin-left: 10px;
    padding-top: 7px;
    text-align: center;
    width: 120px;
    height: 35px;
    border: 1px solid black;
    border-radius: 5px;
}
.info{
    margin-top: 18px;
    margin-left: 18px;
    font-size: 22px;
    color: rgb(112, 190, 241);
}
.info_inner{
    margin-top: 18px;
    margin-left: 18px;
    font-size: 18px;
    color: rgb(51, 51, 51);
}
.nub{
    font-weight: 700;
    font-size: 25px;
    color: rgb(112, 190, 241);

}
.kosh{
    margin-top: 10px;
    margin-left: 18px;
    display: flex;
    text-decoration: none;

}
.kosh_inner{
    width: 130px;
    margin-top: 40px;
    font-weight: 500;
    font-size: 30px;
    color: rgb(112, 190, 241);
}
.koshulu{
    color: #000;
    background-color: #66ff;
    transition: opacity .1s;
    margin-top: 40px;
    margin-left: 15px;
    margin-right: 20px;
    padding-top: 9px;
    text-align: center;
    width: 130px;
    height: 35px;
    border: 1px solid black;
    border-radius: 5px;
    text-decoration: none;
}
a{
    text-decoration: none;
    color: #000;
    transition: opacity .1s;
}
a:hover{
    color: #fff;
    opacity: 1;
}
.all_info{
    margin-top: 40px;
}
.button{
    width: 100%;
    height: 400px;
    background-color: rgb(90, 90, 90);
}
.button_inner{
    width: auto;
    height: 300px;
    justify-content: center;
    display: flex;
    margin-top: 100px;
}
.button_link{
    height: 200px;
    width: 500px;
    margin-top: 100px;
}
.button_link0{
    height: 200px;
    width: 500px;
    margin-top: 100px;
    margin-left: 100px;
}
.button_link1{
    height: 200px;
    width: 500px;
    margin-right: 130px;
    margin-top: 100px;

}
.add{
    margin-top: 20px;
    color: rgb(185, 185, 187);
    font-size: 20px;
    font-weight: 300;
}
.soc{
    margin-top: 30px;
    margin-left: 30px;
    width: 30px;
    height: 30px;
}
.soc1{
    margin-top: 30px;
    width: 30px;
    height: 30px;
}
.add_inner{
    margin-top: 20px;
    color: #fff;
    font-size: 15px;
}
.deep{
    margin-top: 20px;
    color: #fff;
    font-size: 15px;
    text-align: center;
}
.container_inner{
margin-top: 200px;
width: 900px;
text-align: center;
margin-left: auto;
margin-right: auto;
align-items: center 
}
.link{
color: #6b7aee;
font-size: 14px;
text-transform: uppercase;
width: 100%;
margin-top: 40px;
}
.inner_link {
border-radius: 5px;
padding: 8px;
margin: 20px;
color: #000;
text-decoration: none;
transition: opacity .1s;
width: 300px;
height: 55px;
background-color: rgb(95, 95, 248);
}
.inner_link:hover {
color: #fff;
opacity: 1;
}
b{
    font-size: 50px;
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
}
.intro {
    justify-content: center;
    padding-top: 10px;
    height: 600px;
    background: url(fon.jpg) center no-repeat;
    
}
p{
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
}
body{
    margin: 0;
 font-family: Montserrat, sans-serif;
}
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
</style>
<body>
    <header class="container" >
        <div class="intro">
    <div class="container_inner">
<div class="inner"><b>Добро пожаловать</b><br><br> <p>какую заявку хотелибы оставить</p>
<div class="link">
<a class="inner_link" href="podkl/podkl.php">Заявка на подключение</a>
<a class="inner_link" href="request/request.php">Обращение клиента</a>
<a class="inner_link" href="jaloby/jaloby.php">Оставить жалобу</a>
</div>
</div>
     </div>
        </div>
    </header>
    

<div class="best">Лучшие предложения</div>
<div class="tarify">
    <div class="tarify_inner">
        <div class="tarify_link">
            <div class="icon"> 
            <img class="iconn" src = "image/icon-laptop.svg"> 
            <img class="iconn" src = "image/icon-tv.svg">
            <div class="icon_link">Интернет + ТВ</div>
        </div>
        <div class="info">Тариф: Promo60</div>
        <div class="all_info">
        <div class="info_inner">Скорость до: <span class="nub">60</span> мбит</div>
        <div class="info_inner">ТВ каналы: <span class="nub">200</span>внутри тарифа</div>
        <div class="info_inner"><span class="nub">YouTube</span> на ТВ</div>
        </div>
        <div class="kosh">
            <div class="kosh_inner">890 сом</div>
            <div class="koshulu"><a href="/podkl/podkl.php">Подключить</a></div>
        </div>
        </div>
        <div class="tarify_link">
        <div class="icon"> 
            <img class="iconn" src = "image/icon-laptop.svg"> 
            <img class="iconn" src = "image/icon-tv.svg">
            <div class="icon_link">Интернет + ТВ</div>
        </div>
        <div class="info">Тариф: Promo80</div>
        <div class="all_info">
        <div class="info_inner">Скорость до: <span class="nub">80</span> мбит</div>
        <div class="info_inner">ТВ каналы: <span class="nub">200</span>внутри тарифа</div>
        <div class="info_inner"><span class="nub">YouTube</span> на ТВ</div>
        </div>
        <div class="kosh">
            <div class="kosh_inner">1190 сом</div>
            <div class="koshulu"><a href="/podkl/podkl.php">Подключить</a></div>
        </div>

        </div>
        <div class="tarify_link">
        <div class="icon"> 
            <img class="iconn" src = "image/icon-laptop.svg"> 
            <img class="iconn" src = "image/icon-tv.svg">
            <div class="icon_link">Интернет + ТВ</div>
        </div>
        <div class="info">Тариф: Promo100</div>
        <div class="all_info">
        <div class="info_inner">Скорость до: <span class="nub">100</span> мбит</div>
        <div class="info_inner">ТВ каналы: <span class="nub">200</span>внутри тарифа</div>
        <div class="info_inner"><span class="nub">YouTube</span> на ТВ</div>
        </div>
        <div class="kosh">
            <div class="kosh_inner">1290 сом</div>
            <div class="koshulu"><a href="/podkl/podkl.php">Подключить</a></div>
        </div>

        </div>
    </div>
</div>



<div class="button">
    <div class="button_inner">
        
        <div class="button_link0">
            <hr>
            <div class="add">Задайте вопрос</div>
            <a href="https://www.instagram.com"><img class="soc1" src="/image/in.png"></a>
            <a href="https://about.facebook.com"><img class="soc" src="/image/fb.png"></a>
            <a href="https://web.telegram.org/z/"><img class="soc" src="/image/tg.png"></a>
            <a href="https://www.whatsapp.com/?lang=ru"><img class="soc" src="/image/wa.png"></a>
        </div>

        <div class="button_link">
        <hr>

        <div class="add">Наш адрес</div>
        <div class="add_inner">г.Бишкек, ул. Фрунзе 533а</div>
        <div class="add_inner">г.Ош, ул. Ахунбаева 56</div>
        </div>

        <div class="button_link1">
        <hr>

            <div class="add">Служба технической поддержки</div>
            <div class="add_inner">0700112233</div>
            <div class="add_inner">0777112233</div>
            <div class="add_inner">0555112233</div>

        </div>
    </div>
    <hr>
    <div class="deep">© 2022 Дипломка защищена</div>
</div>
</body>
</html>