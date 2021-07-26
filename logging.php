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
      <h1 align="center">Журналирование</h1>
      <form>
        <fieldset>
          <legend>Настройка хранения журнала на удаленном сервере</legend>
       <ul class="flex-inner1">
              <li>Состояние
              <input name="status" type="radio" value="on"> вкл.
              <input name="status" type="radio" value="off"> выкл.</li></ul>
          <div class="box">Приоритет
              <select class="dis" disabled>
                <option value="1">warnings</option>
                <option value="2">changes</option>
              </select>
          </div>

          <ul class="flex-inner">
            Тип сообщения<li>
              <input type="checkbox" name="a" value="kern">kern
            </li>
            <li>
              <input type="checkbox" name="a" value="user">user
            </li>
            <li>
              <input type="checkbox" name="a" value="daemon">daemon
            </li>
            <li>
              <input type="checkbox" name="a" value="auth">auth
            </li>
            <li>
              <input type="checkbox" name="a" value="ftp">ftp
            </li>
          </ul>

          <div class="box"> Адрес сервера
              <input class="dis" name="adress" type="text" value="127.0.0.1" disabled></div>
          <div class="box"> Порт
              <input class="dis" type="number" size="3" name="num" min="1" max="65535" value="512" disabled></div>
          <div class="box">Протокол
              <select class="dis" disabled>
                <option value="1">tcp</option>
                <option value="2">ftp</option>
                <option value="3">http</option>
                <option value="2">wap</option>
              </select> </div>
        </fieldset>
      </form>
      <div class="box"> Размер локального журнала
          <input class="dis" type="number" size="3" name="num" min="1" max="1024" value="1024"></div>
      <div class="box1"><button class="dis">Установить</button></div>
    </div>

    <div id="right_panel" class="bblock">

      <body>
        <h2 align="center">Справка</h2>
        <p>Выберите порт, настройки которого нужно изменить или посмотреть.</p>
        <p>Чтобы изменить настройки порта:</p>
        <ol>
          <li>Включит или выключите отправку журнала на удаленный сервер.</li>
          <li>Если вы включили отправку журнала на удаленный сервер:
            <ol>
              <li>Выберите приоритет.</li>
              <li>Выберите тип сообщения.</li>
              <li>Укажите адрес сервера.</li>
              <li>Укажите порт (1-65535).</li>
              <li>Выберите протокол.</li>
            </ol>
          </li>
          <li>Укажите размер журнала в килобайтах (1-1024).</li>
          <li>Нажмите "Установить".</li>

        </ol>
      </body>
    </div>
  </div>
  <script type="text/javascript">shineLinks('menu');</script>
</body>

</html>