<?php
require_once '../../../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Document</title>
</head>
<style>
    body{
        font-family: Montserrat, sans-serif;
    }
    table{
        background:#008b8b;
        border: 1px;
        margin-top: 20px;
    }
    th, td{
        padding: 10px;
    }
    th{
        background: #008b8b;
        color:white ;
    }
    td{
        background: #fff;
        color: #000;
    }
    .btn{
    margin: 30px 0px 0px 40px;
    position: absolute;
    height: 20px;
    width: 95px;
    background-color: #66ff;
    border: 0px;
    border-radius: 4px;
    color: #000;
    text-align: center;
    text-decoration: none;
    padding: 5px
}
.btn:hover{
    color: #fff; 
    opacity: 0.8;
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
</style>

<body>
<header class="header">
<nav class="nav">
<a class="nav_link" href="../podkl/view_podkl.php">Заявки на подключение</a>
<a class="nav_link" href="view_request.php">Обращение абонентов</a>
<a class="nav_link" href="../jaloby/view_jaloby.php">Жалобы клиентов</a>

</nav>
</header>
<table>
        <tr>
            <th>№</th>
            <th>Локация</th>
            <th>Адрес</th>
            <th>Лицевой счет</th>
            <th>Номер</th>
            <th>Тип обращения</th>
            <th>Описание</th>
            <th>Статус</th>


        </tr>
        <?php
         $projekt = mysqli_query( $connect, query:"SELECT * FROM `request`");
         $projekt = mysqli_fetch_all($projekt);
          foreach ($projekt as $projekt){
              ?>
        <tr>
          <td><?=$projekt[0]?></td>
          <td><?=$projekt[1]?></td>
          <td><?=$projekt[2]?></td>
          <td><?=$projekt[3]?></td>
          <td><?=$projekt[4]?></td>
          <td><?=$projekt[5]?></td>
          <td><?=$projekt[6]?></td>
          <td><?=$projekt[7]?></td>
          <td><a href="update_request.php?id=<?=$projekt[0]?>">Изменить</a></td>
          <td><a style="color: red;" href="delete_request.php?id=<?=$projekt[0]?>">Удалить</a></td>

        </tr> 
          <?php
          }
        ?>
</table><br>
</body>
</html>