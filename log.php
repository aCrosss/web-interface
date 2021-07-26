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
      <h1 align="center">Журнал</h1>
      <label>Количество последних записей
        <input class="dis" name="input" type="text"><button class="dis" onclick="sendMessage()">Изменить</button>
      </label>
      <textarea id="textLog"></textarea>
    </div>

    <div id="right_panel" class="bblock">

      <body>
        <h2 align="center">Справка</h2>

        <p>По умолчанию отображает 100 последних записей из журнала событий.</p>
        <p>Если вы хотите изменить количество последних отображаемых записей, введите в поле для ввода нужное вам
          количество записей и нажмите кнопку "Изменить". </p>
      </body>
    </div>
  </div>
  <script type="text/javascript">shineLinks('menu');</script>
  <script src="js/test.js"></script>
</body>

</html>