<!DOCTYPE html>

<html>

<head>
  <meta http-equiv="Content-Type" content="text\html; charset=UTF-8" />
  <title>Веб-интерфейс</title>
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    function shineLinks(id){
    try{
    var el=document.getElementById(id).getElementsByTagName('a');//ищем наш div в <span class="caps">DOM</span>
    var url=document.location.href;//палим текущий урл
    for(var i=0;i<el.length; i++){
    if (url==el[i].href){
    el[i].className = 'active_menu';//если урл==текущий, добавляем класс
    };
    };
    }catch(e){}
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
      <h1 align="center">Информация</h1>
      <form>
        <fieldset>
          <legend>Контакты</legend>
          <p><strong>Адрес: </strong> АО "БПО "Прогресс", 450001, респ. Башкортостан, г. Уфа, ул. Кировоградская, д. 34 </p>
          <p><strong>Телефон: </strong> +7(347)223-72-42 </p>
      </fieldset>
      </form>

      <form>
        <fieldset>
          <legend>Версия ПО</legend>
            <p>v0.7.0-pgss-1-g3b6cab7</p>
      </fieldset>
    </form>
    </div>

    <div id="right_panel" class="bblock">

      <body>
        <h2 align="center">Справка</h2>
        <p>На этой странице вы можете:</p>
        <ol><li>Посмотреть наши контакты, чтобы связаться с нами.</li>
            <li>Узнать текущую установленную версию ПО.</li></ol></body>
    </div>
  </div>
  <script type="text/javascript">shineLinks('menu');</script>
</body>
</html>