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
    <?php require "blocks/header.php" ?>

        <!--Контейнер для трех нижних панелей-->
        <div id="container" class="wrapper">
            <div id="left_panel" class="bblock">
            <?php require "blocks/menu.php" ?>
            </div>

            <div id="midle_panel" class="bblock">
                <h1 align="center">Маршруты</h1>
                <table>
                    <tbody>
                      <tr>
                        <th align="center"></th>
                        <th align="center">TCP-Порт</th>
                        <th align="center">Начальный ID</th>
                        <th align="center">Конечный ID</th>
                        <th align="center">Смещение</th>
                        <th align="center">Последовательный порт</th>
                      </tr>
                      <tr>
                        <td align="center">
                            <input name="routes" type="radio" value="1">
                        </td>
                        <td align="center">501</td>
                        <td align="center">-</td>
                        <td align="center">-</td>
                        <td align="center">-</td>
                        <td align="center">1</td>
                      </tr>      
                      <tr>
                        <td align="center">
                            <input name="routes" type="radio" value="2">
                        </td>
                        <td align="center">502</td>
                        <td align="center">-</td>
                        <td align="center">-</td>
                        <td align="center">-</td>
                        <td align="center">2</td>
                      </tr> 
                      <tr>
                        <td align="center">
                            <input name="routes" type="radio" value="3">
                        </td>
                        <td align="center">503</td>
                        <td align="center">1</td>
                        <td align="center">2</td>
                        <td align="center">0</td>
                        <td align="center">3</td>
                      </tr> 
                      <tr>
                        <td align="center">
                            <input name="routes" type="radio" value="4">
                        </td>
                        <td align="center">503</td>
                        <td align="center">5</td>
                        <td align="center">7</td>
                        <td align="center">0</td>
                        <td align="center">4</td>
                      </tr> 
                      <tr>
                        <td align="center">
                            <input name="routes" type="radio" value="5">
                        </td>
                        <td align="center">503</td>
                        <td align="center">-</td>
                        <td align="center">-</td>
                        <td align="center">-</td>
                        <td align="center">5</td>
                      </tr> 
                      <tr>
                        <td align="center">
                            <input name="routes" type="radio" value="6">
                        </td>
                        <td align="center">504</td>
                        <td align="center">1</td>
                        <td align="center">1</td>
                        <td align="center">2</td>
                        <td align="center">6</td>
                      </tr> 
                      <tr>
                        <td align="center">
                            <input name="routes" type="radio" value="7">
                        </td>
                        <td align="center">504</td>
                        <td align="center">6</td>
                        <td align="center">6</td>
                        <td align="center">-3</td>
                        <td align="center">7</td>
                      </tr> 
                    </tbody>
                  </table>
                 <div align="center"> <button class="dis"><a href="routes2.php"> Добавить</a></button>
                  <button class="dis">Удалить</button>
                  <button class="dis">Редактировать</button></div>
            </div>

            <div id="right_panel" class="bblock">
              <body>
                <h2 align="center">Справка</h2>
                <p>Чтобы добавить новый маршрут нажмите кнопку "Добавить". </p>
                <p>Чтобы удалить маршрут выберите маршрут, который нужно удалить и нажмите кнопку "Удалить". </p>
                <p>Чтобы изменить маршрут выберите маршрут, который нужно изменить и нажмите кнопку "Редактировать". </p>
                </body>
            </div>
        </div>
        <script type="text/javascript">shineLinks('menu');</script>
    </body>

</html>