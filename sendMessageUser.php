<?php
    if(isset($_POST["send"])) {
      $from = $_COOKIE[email];
      $subject = htmlspecialchars($_POST[subject]);
      $message = htmlspecialchars($_POST[message]);
      $to = "adminThisSite@gmail.com";
      $errorMesssage;
      if ($subject == "" || strlen($subject) < 3) {
        $errorMesssage = "Введіть коректну тему повідомлення!";
      } else if ($message == "" || strlen($message) < 10) {
        $errorMesssage = "Довжина повідомлення повинна бути більше 10 символів!";
      } else {
        $subject ="=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to:$from\r\nContent-type:text\plain; charset=utf-8\t\n";
        mail($to, $subject, $message, $headers);
        $errorMesssage = "Повідомлення успішно відправлено!";
      }

    }
 ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Написати нам</title>
    <link rel="stylesheet" type="text/css" href="css/style_2.css">
    <link rel="stylesheet" type="text/css" href="css/style_1.css">
  </head>
  <body >
    <?php require "blocks/menu.php" ?>
      <div class="decor">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <form name="feedback" action="" method="post">
        <div class="form-inner">
          <h3>Написати нам</h3>
          <input type="text" name="subject" placeholder="Введіть тему повідомлення"/>
          <textarea name="message" placeholder="Введіть повідомлення..." rows="3"></textarea>
          <span id="ErrorM"><?=$errorMesssage?></span>
          <input type="submit" name="send" value="Відправити"/>
        </div>
      </form>
    </div>
    <?php require "blocks/footer.php" ?>
  </body>
</html>
