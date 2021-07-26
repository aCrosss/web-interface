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
      <h1 align="center">Сетевой интерфейс</h1>

      <form>
        <fieldset>
          <legend>Сетевой интерфейс 1</legend>
          <ul class="flex-inner2">
            <li>Получить IP-адрес
    <input name="IP" type="radio" value="dinamic"> динамически
    <input name="IP" type="radio" value="static"> статически</li></ul>
    <div class="box"> Адрес
      <input class="dis" name="adress" type="text" value="172.22.1.164" disabled></div>
      <div class="box"> Маска
        <input class="dis" name="mask" type="text" value="255.255.252.0" disabled></div>
    <ul class="flex-inner1"> <li>Состояние<em> </em><input name="status" type="radio" value="on"> вкл.
      <input name="status" type="radio" value="off"> выкл.</li></ul>
        </fieldset>
      </form>
      <div class="box"> Шлюз по умолчанию
        <input class="dis" name="lock" type="text" value="172.22.1.1"></div>
        <div class="box1">
        <button class="dis1">Установить</button></div>
    </div>

    <div id="right_panel" class="bblock">

      <body>
        <h2 align="center">Справка</h2>
        <ol>
          <li>Выберите способ получения адреса (динамически или статически).</li>
          <li>Если выбран статический способ:</li>
          <ol>
            <li>Введите IP-адрес (например, 192.168.1.1).</li>
            <li>Введите маску подсети (например, 255.255.255.0).</li>
          </ol>
          <li>Выберите нужное состояние интерфейса.</li>
          <li>Если необходимо укажите шлюз по умолчанию.</li>
          <li>Нажмите "Установить".</li>
        </ol>
      </body>
    </div>
  </div>
  <script type="text/javascript">shineLinks('menu');</script>
</body>

</html>