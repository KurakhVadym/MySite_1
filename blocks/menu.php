<ul class="menu-main">
  <?php
  if ($_COOKIE['name'] == '') :
  ?>
    <li><a href="index.php">Головна</a></li>
    <li><a href="sign_up.php">Зареєструватися</a></li>
    <li><a href="log_in.php">Увійти</a></li>
    <li><a href="sendMessage.php">Написати нам</a></li>
  <?php else: ?>
    <li><a href="index.php">Головна</a></li>
    <li><a href="converter.php">Конвертер валюти</a></li>
    <li><a href="myAccount.php">Мій кабінет</a></li>
    <li><a href="sendMessageUser.php">Написати нам</a></li>
  <?php endif; ?>
</ul>
