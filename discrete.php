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
      <h1 align="center">Дискретные I/O и реле</h1>
      
      <div class="box">Дискретный вход
        <input  class = "dis" name="input" type="text" value="Высокий" disabled>
      </div>

      <div class="box"> Дискретный выход
        <select  class = "dis">
          <option>Низкий</option>
          <option>Высокий</option>
        </select>
      </div>

      <div class="box">Выход реле
        <select  class = "dis" >
          <option>Разомкнуто</option>
          <option>Замкнуто</option>
        </select>
      </div>

      <div class="box"> <button >Установить</button></div>
    </div>

    <div id="right_panel" class="bblock">

      <body>
        <h2 align="center">Справка</h2>
        <p>Поле дискретного входа только отображает свое текущее состояние.</p>
        <p>Чтобы изменить состояние дискретного выхода и положения реле:</p>
        <ol>
          <li>Выберите уровень дискретного выхода.</li>
          <li>Выберите положение реле.</li>
          <li>Нажмите "Установить".</li>
        </ol>
      </body>
    </div>
  </div>
  <script type="text/javascript">shineLinks('menu');</script>
</body>

</html>