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
      <h1 align="center">Последовательные порты RS-485</h1>

<div class="box">Выберите последовательный порт:
<select class = "dis">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select></div>

<form>
<fieldset>
<legend>Последовательный порт 1</legend>
<div class="box">Скорость порта
<select class = "dis" >
<option value="1">9600</option>
<option value="2">9000</option>
<option value="3">9500</option>
</select></div>

<div class="box">Режим контроля четности
<select class = "dis">
<option value="1">да</option>
<option value="2">нет</option>
</select></div>

<div class="box">Количество стоповых бит
<select class = "dis">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select></div>

<div class="box">Состояние терминирующего резистора
<select class = "dis">
<option value="1">Отключен</option>
<option value="2">Включен</option>
</select></div>

<div class="box">TCP-порт
<input  class = "dis"type="text"  value="501"></div>
<div class="box">Время ожидания ответа
<input  class = "dis"type="text"  value="500"></div>
</fieldset>
</form>

<div class="box1"> 
  <button class="dis">Установить</button></div>
</div>

<div id="right_panel" class="bblock">
<body>
<h2 align="center">Справка</h2>
<p>Выберите порт, настройки которого нужно изменить или посмотреть.</p>
<p>Чтобы изменить настройки порта:</p>
<ol >
<li>Выберите скорость порта.</li>
<li>Выберите режим контроля четности.</li>
<li>Выберите количество стоповых бит.</li>
<li>Выберите состояние терминирующего резистора.</li>
<li>Укажите TCP-порт, на который будут посылаться Modbus TCP запросы для данного интерфейса RS-485 (1-65535).</li>
<li>Укажите время ожидания ответа в миллисекундах (1-10000).</li>
<li>Нажмите "Установить".</li>
</ol>
</body>
  </div>
  <script type="text/javascript">shineLinks('menu');</script>
</body>
</html>