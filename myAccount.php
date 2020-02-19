<?php
  $name = $_COOKIE[name];
  $surname = $_COOKIE[surname];
  $dateBirth = $_COOKIE[dateBirth];
  $email = $_COOKIE[email];
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Мій кабінет</title>
    <link rel="stylesheet" type="text/css" href="css/style_2.css">
    <link rel="stylesheet" type="text/css" href="css/style_1.css">
    <link rel="stylesheet" type="text/css" href="css/style_3.css">
  </head>
  <body >
    <?php require "blocks/menu.php" ?>
      <div class="decor">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <form name="feedback" action="exit.php" method="post">
        <div class="form-inner">
          <h3>Особиста інформація</h3>
          <span id="userInformation">
          <p>Ім'я: <b><?=$name?></b></p>
          <p>Прізвище: <b><?=$surname?></b></p>
          <p>Дата народження: <b><?=$dateBirth?></b></p>
          <p>Email: <b><?=$email?></b></p>
          </span>
          <input type="submit" name="send" value="Вийти"/>
        </div>
      </form>
    </div>
    <?php require "blocks/footer.php" ?>
  </body>
</html>
