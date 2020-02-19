<?php
  $name = filter_var(trim($_POST[name]), FILTER_SANITIZE_STRING);
  $surname = filter_var(trim($_POST[surname]), FILTER_SANITIZE_STRING);
  $dateBirth = filter_var(trim($_POST[dateBirth]), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST[email]), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST[password]), FILTER_SANITIZE_STRING);
  $rePassword = filter_var(trim($_POST[rePassword]), FILTER_SANITIZE_STRING);

  $errorMesssage;
  $send = false;

  if(mb_strlen($name) <= 1 || mb_strlen($name) >90){
    $errorMesssage = "Введіть коректне ім'я!";
  } else if (mb_strlen($surname) <= 1 || mb_strlen($name) >90){
    $errorMesssage = "Введіть коректне прізвище!";
  } else if (mb_strlen($dateBirth) < 8 || mb_strlen($dateBirth) > 10){
    $errorMesssage = "Виберіть коректну дату!";
  } else if (mb_strlen($email) <= 5){
    $errorMesssage = "Введіть коректний email!";
  } else if (mb_strlen($password) < 5){
    $errorMesssage = "Довжина паролю має бути більше 5 символів!";
  } else if ($password != $rePassword){
    $errorMesssage = "Паролі не збігаються!";
  }else {
    $pass = md5($password."qwdhoncubyiqwdn");
    $mysqli= new mysqli("localhost", "root", "", "new_site_db");
    $mysqli -> query('INSERT INTO `users_tdb`(`name`, `surname`, `date_birth`, `email`, `password`)  VALUES("$name", "$surname", "$dateBirth", "$email", "$pass")');
    $mysqli -> close();
    $send = true;
  }
  if ($send == true) {
    setcookie('name', $name, time() + 3600, "/");
    setcookie('surname', $surname, time() + 3600, "/");
    setcookie('dateBirth', $dateBirth, time() + 3600, "/");
    setcookie('email', $email, time() + 3600, "/");
    header('Location: /');
  }
  else {
    echo $errorMesssage;
  }
?>
