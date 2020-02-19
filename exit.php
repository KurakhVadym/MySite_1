<?php
  setcookie('name', $arrayData[name], time() - 3600, "/");
  header('Location: /');
?>
