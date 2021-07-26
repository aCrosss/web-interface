<!DOCTYPE html>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text\html; charset=UTF-8"/>
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
        <!--Верхняя панель-->
        <?php require "blocks/header.php" ?>

        <!--Контейнер для трех нижних панелей-->
        <div id="container" class="wrapper">
            <div id="left_panel" class="bblock">
              <?php require "blocks/menu.php" ?>
            </div>

            <div id="midle_panel" class="bblock">
                <h1 align="center">Состояние интерфейсов</h1>

                <form>
                  <fieldset>
                    <legend>Сетевые интерфейсы</legend>
                <table>
                    <tbody>
                      <tr>
                        <th align="center">Интерфейс</th>
                        <th align="center">IP-адрес</th>
                        <th align="center"> Маска подсети</th>
                        <th align="center">Состояние</th>
                      </tr>
                      <tr>
                        <td align="center">1</td>
                        <td align="center">172.22.1.164</td>
                        <td align="center">255.255.252.0</td>
                        <td align="center">вкл.</td>
                      </tr>
                    </tbody>
                  </table>
                </fieldset>
                </form>

                <form>
                  <fieldset>
                    <legend>Последовательные порты</legend>
                <table>
                    <tbody>
                      <tr>
                        <th align="center">Порт</th>
                        <th align="center">Скорость</th>
                        <th align="center">Контроль<br> четности</th>
                        <th align="center">Количество<br> стоповых<br> бит</th>
                        <th align="center">Терминирующий<br> резистор</th>
                      </tr>
                      <tr>
                        <td align="center">1</td>
                        <td align="center">9 600</td>
                        <td align="center">нет</td>
                        <td align="center">1</td>
                        <td align="center">выкл.</td>
                      </tr>
                      <tr>
                        <td align="center">2</td>
                        <td align="center">9 600</td>
                        <td align="center">нет</td>
                        <td align="center">1</td>
                        <td align="center">выкл.</td>
                      </tr>
                      <tr>
                        <td align="center">3</td>
                        <td align="center">9 600</td>
                        <td align="center">нет</td>
                        <td align="center">1</td>
                        <td align="center">выкл.</td>
                      </tr>
                      <tr>
                        <td align="center">4</td>
                        <td align="center">9 600</td>
                        <td align="center">нет</td>
                        <td align="center">1</td>
                        <td align="center">выкл.</td>
                      </tr>
                      <tr>
                        <td align="center">5</td>
                        <td align="center">9 600</td>
                        <td align="center">нет</td>
                        <td align="center">1</td>
                        <td align="center">выкл.</td>
                      </tr>
                      <tr>
                        <td align="center">6</td>
                        <td align="center">9 600</td>
                        <td align="center">нет</td>
                        <td align="center">1</td>
                        <td align="center">выкл.</td>
                      </tr>
                      <tr>
                        <td align="center">7</td>
                        <td align="center">9 600</td>
                        <td align="center">нет</td>
                        <td align="center">1</td>
                        <td align="center">выкл.</td>
                      </tr>
                      <tr>
                        <td align="center">8</td>
                        <td align="center">9 600</td>
                        <td align="center">нет</td>
                        <td align="center">1</td>
                        <td align="center">выкл.</td>
                      </tr>
                    </tbody>
                  </table>
                </fieldset>
              </form>
            </div>

            <div id="right_panel" class="bblock">
              <body>
                <h2 align="center">Справка</h2>
                <p><strong>IP-адрес -</strong> уникальный сетевой адрес узла в компьютерной сети, построенный на основе стека протокола TCP/IP. </p>
                <p><strong>Маска подсети -</strong> битовая маска для определения по IP-адресу адреса подсети и адреса узла этой подсети. </p>
                <p><strong>Состояние -</strong> показывает включен или выключен данный сетевой интерфейс в настоящее время. </p>
                <p><strong>Порт -</strong> имя последовательного порта на конвертере. </p>
                <p><strong>Скорость -</strong> скорость последовательного порта в бит/с. </p>
                <p><strong>Kонтроль четности -</strong> используется для обнаружения ошибок при передаче данных. </p>
                <p><strong>Количество стоповых бит -</strong> количество стоповых бит, небходимых для правильного распознования конца байта. </p>
                <p><strong>Терминирующий резистор -</strong> сопротивление в 120 Ом, предназначено для уменьшения отраженных сигналов (шумов).</p>
                </body>
            </div>
        </div>
  <script type="text/javascript">shineLinks('menu');</script>
    </body>

</html>