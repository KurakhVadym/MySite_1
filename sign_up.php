<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Зареєструватися</title>
    <link rel="stylesheet" type="text/css" href="css/style_1.css">
    <link rel="stylesheet" type="text/css" href="css/style_2.css">
  </head>
  <body>
    <?php require "blocks/menu.php" ?>
    <form class="decor" name="logIn_form" action="check_signUp.php" method="post">
        <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h3>Введіть вказані дані для реєстрації</h3>
        <input type="text" name="name" placeholder="Введіть ім'я">
        <input type="text" name="surname" placeholder="Введіть прізвище">
        <input title="Виберіть дату народження" type="date" name="dateBirth">
        <input type="email" name="email" title="Введіть пошту, яка надалі буде вашим логіном для входу" placeholder="Введіть пошту">
        <input type="password" name="password" placeholder="Введіть пароль">
        <input type="password" name="rePassword" placeholder="Повторіть пароль">
        <input type="submit" name="logIn" value="Увійти">
      </div>
  </form>
  <?php require "blocks/footer.php" ?>
  </body>
</html>
