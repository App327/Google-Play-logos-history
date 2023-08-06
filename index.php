<?php
header("HTTP/1.1 200 OK");

$product = isset($_GET["product"])? $_GET["product"]: "Google Play Store";
$date = isset($_GET["date"])? $_GET["date"]: "2022-now";
$type = isset($_GET["type"])? $_GET["type"]: "png";
$size = isset($_GET["size"])? $_GET["size"]: "200";
$wordmark = isset($_GET["wordmark"])? $_GET["wordmark"]: "off";

echo '<!DOCTYPE html>
<html lang="ru" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>'.$product.' • '.$type.' ('.$size.'px) @ '.$date.' [wm='.$wordmark.'] | История логотипов Google Play</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="skyblue">
  <meta name="msapplication-navbutton-color" content"skyblue">
  <meta name="apple-mobile-web-app-capable" content="yes"> <meta name="apple-mobile-web-app-status-bar-style" content="skyblue">
  <link rel="stylesheet" href="/static/css/1.css" media="all">
  <style>body {font-family: Arial, Verdana;}</style>
 </head>
 <body>
  <header>
   <noscript>У Вас отключён JavaScript. Вообще, только PHP и HTML здесь обойтись можно, но Вам будет неудобно :)<br></noscript>
   <a href="/index.php" rel="prefetch">История логотипов Google Play</a>
  </header>
  <article>
   <h2><span id="product">'.$product.'</span> • <span id="type">'.$type.'</span> (<span id="size">'.$size.'</span>px) @ <span id="date">'.$date.'</span> [wm=<span id="wordmark">'.$wordmark.'</span>]</h2>
   <form action="/index.php" method="get">
    <fieldset>
     <legend>Выбрать логотип</legend>
     <select name="product" id="products">
      <option selected="" disabled="">Название</option>
      <option value="Google Play Store">Google Play Маркет</option>
      <option value="Google Play Games">Google Play Игры</option>
      <option value="Google Play Books">Google Play Книги</option>
      <option value="Google Play Movies &amp; TV">Google Play Фильмы</option>
      <option value="Google Play Music">Google Play Музыка</option>
      <option value="Google Play Newsstand">Google Play Пресса</option>
      <option value="Google Play Console">Google Play Консоль (Console)</option>
     </select><br>
     <select name="date" id="dates">
      <option selected="" disabled="">Период</option>
      <optgroup label="Google Play Маркет">
       <option value="2012-2014">2012–2014</option>
       <option value="2012-2016">2012–2016</option>
       <option value="2014-2016">2014–2016</option>
       <option value="2016-2017">2016–2017</option>
       <option value="2016-2022">2016–2022</option>
       <option value="2022-now">2022–сейчас</option>
      </optgroup>
      <optgroup label="Google Play Игры">
       <option value="2013-2014">2013–2014</option>
       <option value="2014-2016">2014–2016</option>
       <option value="2016-2022">2016–2022</option>
       <option value="2022-now">2022–сейчас</option>
      </optgroup>
      <optgroup label="Google Play Книги">
       <option value="2010-2012">2010–2012 (beta)</option>
       <option value="2012-2014">2012–2014</option>
       <option value="2014-2016">2014–2016</option>
       <option value="2016-2023">2016–2023</option>
       <option value="2023-now">2023–сейчас</option>
      </optgroup>
      <optgroup label="Google Play Пресса">
       <option value="2012-2013">2012–2013</option>
       <option value="2013-2014">2013–2014</option>
       <option value="2014-2016">2014–2016</option>
       <option value="2016-2018">2016–2018</option>
      </optgroup>
      <optgroup label="Google Play Фильмы">
       <option value="2012-2014">2012–2014</option>
       <option value="2014-2016">2014–2016</option>
       <option value="2016-now">2016–сейчас</option>
      </optgroup>
      <optgroup label="Google Play Музыка">
       <option value="2011-2012">2011–2012 (beta)</option>
       <option value="2012-2014">2012–2014</option>
       <option value="2014-2016">2014–2016</option>
       <option value="2016-2020">2016–2020</option>
      </optgroup>
      <optgroup label="Google Play Консоль (Console)">
       <option value="2013-2015">2013–2015 (beta)</option>
       <option value="2015-2016">2015–2016</option>
       <option value="2016-2023">2016–2023</option>
       <option value="2023-now">2023–сейчас</option>
      </optgroup>
     </select><br>
     <select name="type" id="types">
      <option selected="" disabled="">Тип</option>
      <option value="png">PNG</option>
      <option value="svg">SVG</option>
     </select><br>
     <select name="size" id="sizes">
      <option selected="" disabled="">Размеры</option>
      <option value="512">512</option>
      <option value="200">200</option>
      <option value="800">800</option>
      <option value="1000">1000</option>
      <option value="max">Макс.</option>
     </select><br>
     <label id="wm-label" style="color: black;"><input type="checkbox" name="wordmark" id="wordmark-chbx"> С водяным знаком</label><br>
     <input type="reset" value="Сбросить" id="reset"> | <input type="submit" value="Показать" id="submit">
    </fieldset>
    <div style="height: 20px;"></div>
    <fieldset>
     <legend>Результат</legend>
      <img src="/static/img/logos/'.$product.'/'.$type.'/'.$date.'/wm-'.$wordmark.'/'.$size.'.'.$type.'" alt="Результат">
      <br>
      <a href="/static/img/logos/'.$product.'/'.$type.'/'.$date.'/wm-'.$wordmark.'/'.$size.'.'.$type.'" download="">скачать</a> | <a href="/static/img/logos/'.$product.'/'.$type.'/'.$date.'/wm-'.$wordmark.'/'.$size.'.'.$type.'" target="_blank">открыть в новой вкладке</a>
    </fieldset>
   </form>
  </article>
  <footer>
   <p class="google-trademarks"><em>Google, Android, Google Play и другие названия являются товарными знаками компании Google LLC.</em></p>
   <p class="version">Версия <strong>1.0</strong> (<a href="/doc.php?section=version&name=whats-new">что нового</a>)</p>
   <p class="policies"><a href="/doc.php?section=policies&name=privacy">Политика конфиденциальности</a> — <a href="/doc.php?section=policies&name=terms">Условия использования</a></p>
  </footer>

  <!-- JavaScript -->
  <script type="text/javascript" src="../static/js/1.js"></script>
  <script type="text/javascript">
   document.getElementById("products").value = "'.$product.'";
   document.getElementById("dates").value = "'.$date.'";
   document.getElementById("types").value = "'.$type.'";
   document.getElementById("sizes").value = "'.$size.'";
   if ("'.$wordmark.'" == "on") {
    document.getElementById("wordmark-chbx").setAttribute("checked", "");
   } else if ("'.$wordmark.'" == "off") {
    document.getElementById("wordmark-chbx").removeAttribute("checked");
   }
  </script>
 </body>
</html>';

?>