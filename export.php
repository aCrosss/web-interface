<!DOCTYPE html>

<html>

<head>
  <meta http-equiv="Content-Type" content="text\html; charset=UTF-8" />
  <title>Веб-интерфейс</title>
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    function shineLinks(id) {
      try {
        var el = document.getElementById(id).getElementsByTagName('a');//ищем наш div в <span class="caps">DOM</span>
        var url = document.location.href;//палим текущий урл
        for (var i = 0; i < el.length; i++) {
          if (url == el[i].href) {
            el[i].className = 'active_menu';//если урл==текущий, добавляем класс
          };
        };
      } catch (e) { }
    };</script>
</head>

<body>
<?php require "blocks/header.php" ?>

  <!--Контейнер для трех нижних панелей-->
  <div id="container" class="wrapper">
    <div id="left_panel" class="bblock">
    <?php require "blocks/menu.php" ?>
    </div>

    <div id="midle_panel" class="bblock">
      <h1 align="center">Экспорт конфигурации</h1>
      <p><input class="dis1" name="configuration" type="radio" value="actual"> Текущая конфигурация</p>
      <p><input class="dis1" name="configuration" type="radio" value="initial"> Начальная конфигурация</p>
      <label class="box1"><button class="dis">Экспортировать</button></label>
    </div>

    <div id="right_panel" class="bblock">
      <body>
        <h2 align="center">Справка</h2>
        <ol>
          <li>Выберите экспортируемые настройки.</li>
          <li>Нажмите "Экспортировать".</li>
        </ol>
      </body>
    </div>
  </div>
  <script type="text/javascript">shineLinks('menu');</script>
</body>

</html>