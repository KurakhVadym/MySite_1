<?php
  $login = filter_var(trim($_POST[login]), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST[password]), FILTER_SANITIZE_STRING);
  $errorMesssage;

  if($login == "" || $password == ""){
    $errorMesssage = "Заповніть всі поля!";
    echo $errorMesssage;
  } else {
    $pass = md5($password."qwdhoncubyiqwdn");
    $mysqli= new mysqli("localhost", "root", "", "new_site_db");
    $resData = $mysqli -> query("SELECT * FROM `users_tdb` WHERE `email` = '$login' AND `password` = '$pass'");
    $arrayData = $resData->fetch_assoc();
    if (count($arrayData) != 0) {
      setcookie('name', $arrayData[name], time() + 3600, "/");
      setcookie('surname', $arrayData[surname], time() + 3600, "/");
      setcookie('dateBirth', $arrayData[date_birth], time() + 3600, "/");
      setcookie('email', $arrayData[email], time() + 3600, "/");
      header('Location: /');
    } else {
        echo "Користувача не знайдено";
    }
    $mysqli -> close();
  }


?>
