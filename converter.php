<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Конвертер валюти</title>
    <link rel="stylesheet" type="text/css" href="css/style_1.css">
    <link rel="stylesheet" type="text/css" href="css/style_2.css">
    <link rel="stylesheet" type="text/css" href="css/style_3.css">
  </head>
  <body>
    <?php require "blocks/menu.php" ?>
    <div class="decor">
    <div class="form-left-decoration"></div>
    <div class="form-right-decoration"></div>
    <div class="circle"></div>
    <form name="converter">
      <div class="form-inner">
        <h3>Конвертація валюти</h3>
        <h2>UAH</h2>
        <input id="UANsumm" type="text" name="UAH" placeholder="Введіть суму в грн"/>
        <div id="resultExchange">
          <span class="textV" title="Долар США">USD</span>
          <span id="USDsumm" title="Долар США"></span></br>
          <span class="textV" title="Євро">EUR</span>
          <span id="EURsumm" title="Євро"></span></br>
          <span class="textV" title="Канадський долар">CAD</span>
          <span id="CADsumm" title="Канадський долар"></span></br>
          <span class="textV" title="Чеська крона">CZK</span>
          <span id="CZKsumm" title="Чеська крона"></span></br>
        </div>
      </div>
    </form>
  </div>
    <?php require "blocks/footer.php" ?>
    <script type="text/javascript">
      document.getElementById('resultExchange').style.visibility = 'hidden';
      document.getElementById('UANsumm').addEventListener('input', function(e){
        document.getElementById('resultExchange').style.visibility = 'visible';
        let uan = e.target.value;
        document.getElementById('USDsumm').innerHTML = uan / 24.8;
        document.getElementById('EURsumm').innerHTML = uan / 27.32;
        document.getElementById('CADsumm').innerHTML = uan / 18.67;
        document.getElementById('CZKsumm').innerHTML = uan / 1.09;
      })
    </script>
  </body>
</html>
