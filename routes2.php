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
      <h1 align="center">Маршруты</h1>
    <div class="box">TCP-порт
      <input class="dis" name="input" type="text"></div>
      <div class="box"> Последовательный порт 
        <select class="dis">
            <option>Выберите порт</option>
            <option>1</option>
          </select></div>
          <div class="box">Начальный ID
            <input class="dis" name="input" type="text"></div>
          <div class="box">Конечный ID
            <input class="dis" name="input" type="text"></div>
          <div class="box">Смещение
            <input class="dis" name="input" type="text"></div>        
          
            <div align="center"><button class="dis">Сохранить</button>
       <button class="dis"><a href="routes.php"> Отмена</a></button></div>
    </div>

    <div id="right_panel" class="bblock">

      <body>
        <h2 align="center">Справка</h2>
        
        <p>Чтобы добавить маршрут:</p>
        <ol>
            <li>В поле "TCP-порт" укажите TCP-порт, на который будут приходить запросы.</li>
            <li>В поле "Последовательный порт" выберите из выпадающего списка последовательный порт, на который следует перенаправить запрос.</li>
            <li>В поле "Начальный ID" укажите начало диапазона ID slave-устройства, для которых работает данный маршрут.</li>
            <li>В поле "Конечный ID" укажите конец диапазона ID slave-устройства, для которых работает данный маршрут.</li>
            <li>В поле "Смещение" укажите смещение диапазона ID slave-устройства.</li>
        </ol>
          <p>Если поля "Начальный ID", "Конечный ID", и "Смещение" оставить пустыми, то все запросы с порта "TCP-порт", для которых не определен иной маршрут со специфированным диапазоном, будут перенаправлены на указанный "Последовательный порт". </p>
          <p>Для одного и того же "TCP-порт" не может быть более одного маршрута с неспецифицированным диапазоном ID slave-устройства.</p>
      </body>
    </div>
  </div>
  <script type="text/javascript">shineLinks('menu');</script>
</body>

</html>