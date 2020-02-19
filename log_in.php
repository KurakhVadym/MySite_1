<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Увійти</title>
    <link rel="stylesheet" type="text/css" href="css/style_1.css">
    <link rel="stylesheet" type="text/css" href="css/style_2.css">
  </head>
  <body>
    <?php require "blocks/menu.php" ?>
    <form class="decor" id="form_logIn" name="logIn_form" action="check.php" method="post">
        <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h3>Увійти в особистий кабінет</h3>
        <input type="text" name="login" placeholder="Введіть логін">
        <input type="password" name="password" placeholder="Введіть пароль">
        <input type="submit" name="logIn" value="Увійти">
      </div>
  </form>
  <?php require "blocks/footer.php" ?>
  </body>
</html>
