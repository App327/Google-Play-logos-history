<?php
header("HTTP/1.1 200 OK");

$sect = isset($_GET["section"])? $_GET["section"]: "[null]";
$nm = isset($_GET["name"])? $_GET["name"]: "[null]";


if ($sect == "version") {
 $section = 'Версия';
} else {
 if ($sect == "policies") {
  $section = 'Политики';
 } else {
  $section = 'Главная';
 }
}

if ($nm == "whats-new") {
 $name = 'Что нового';
 $content = '  <h2>Что нового</h2>
   <p>Версия <strong>1.0</strong></p>
   <hr noshade color="silver">
   <p>Список изменений:</p>
   <ul>
    <li>Создан данный сервис.</li>
   </ul>';
} else {
 if ($nm == "privacy") {
  $name = 'Конфиденциальность';
  $content = '   <h2>Политика конфиденциальности</h2>
   <p style="border: solid 1px red">⚠️ Пользуясь данным веб-сайтом, Вы принимаете его Политику конфиденциальности <em>(см. ниже)</em> и <a href="/doc.php?section=policies&name=terms">Условия использования</a>.</p>
   <h3>Сокращения и термины</h3>
   <table cols="2" border="1px">
    <thead>
     <tr>
      <th>Сокращение/термин</th>
      <th>Значение</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td>Сайт</td>
      <td>Этот веб-сайт («<a href="/">История логотипов Google Play</a>»)</td>
     </tr>
     <tr>
      <td><a href="https://www.google.com/">Google</a></td>
      <td>Компания Google LLC (1600 Amphitheatre Parkway, Mountain View, CA 94043, USA)</td>
     </tr>
     <tr>
      <td><a href="https://play.google.com/store">Google Play</a></td>
      <td>Один из продуктов компании Google для ОС Android. Огромная библиотека приложений, игр, книг, <s>фильмов</s>, <s>музыки</s> и <s>прессы</s>. До 2012 г. назывался <em>Android Market</em>.</td>
     </tr>
     <tr>
      <td><a href="https://www.android.com/">Android</a></td>
      <td>Популярная мобильная ОС от Google с открытым исходным кодом (Android Open Source Project). Вышла в 2009 г., поддерживается и сегодня. Бо́льшая часть смартфонов от Xiaomi, Samsung, Huawei и др. работают на этой ОС.</td>
     </tr>
     <tr>
      <td>Релиз</td>
      <td>Официальный выпуск новой версии чего-либо. <em>Пример: <u>Релиз новой версии приложения</ul>.</em></td>
     </tr>
     <tr>
      <td>Файлы cookie (куки)</td>
      <td>Файлы, содержание данные в виде пары «ключ=значение». Эти файлы хранятся в браузере и используются веб-сайтом, который сохранил файл cookie.<br><a href="https://ru.wikipedia.org/wiki/Cookie?useskin=vector-2022">Значение в Википедии</a>.</td>
     </tr>
    </tbody>
   </table>
   <p>Значения других слов можно найти в Интернете, например, через поисковую систему  <a href="https://www.google.com/">Google</a>:</p>
   <form action="https://www.google.com/search" method="get" id="google-search-form">
    <input type="text" name="q" placeholder="Введите запрос...">
    <select name="hl">
     <optgroup label="Язык">
      <option value="ru">Русский</option>
      <option value="en">Английский</option>
     </optgroup>
    <input type="reset"> | <input type="submit" value="Поиск">
   </form>
   <hr noshade color="grey">
   <h3 id="your-data">Ваши данные</h3>
   <p id="your-data@1">При использовании данного сайта Ваши данные никуда не отправляются и никем не используются.</p>
   <p id="your-data@2">Однако, перед отправкой любой веб-формы (например, <a href="#google-search-form">формы выше</a>), во всех текстовых полях Вам необходимо убедиться, что Вы не написали свои конфиденциальные данные. В противном случае, Вы подставляете под угрозу указанные Вами личные (конфиденциальные) данные. Будьте внимательны, не торопитесь нажимать «Отправить»!</p>
   <hr noshade color="grey">
   <h3 id="your-privacy">Ваша конфиденциальность</h3>
   <p id="your-privacy@1">Все Ваши конфиденциальные данные, при использовании данного сайта, находятся в безопасности.</p>
   <p id="your-privacy@2">Однако, есть исключение — случай, описанный во <a href="#your-data@2">втором абзаце</a> раздела «<a href="#your-data">Ваши данные</a>».</p>
   <hr noshade color="grey">
   <h3 id="your-security">Ваша безопасность</h3>
   <p id="your-security@1">При использовании данного сайта все Вы находитесь в безопасности, беспокоиться Вам не нужно (по крайней мере, о том, что Ваши личные данные попадут данному сайту — этот сайт вообще не знает, кто его посещает!).</p>
   <p id="your-security@2">Однако, если Ваш браузер (или ещё хуже, ОС) взломали, то, возможно, у взломщиков появится доступ к Вашим личным данным, но владельцу этого сайта всё равно Ваши данные не достанутся.</p>
   <hr noshade color="grey">
   <h3 id="cookie-files">Файлы cookie</h3>
   <p id="cookie-files@1">Пока что, этот сайт не использует файлы cookie.</p>
   <hr noshade color="grey">
   <h3 id="more">Ещё</h3>
   <p id="more@1">На этом Политика конфиденциальности окончена.</p>
   <p id="more@2">Также Вы можете ознакомиться с <a href="/doc.php?section=policies&name=terms">Условиями использования</a>.</p>
';
 } else {
  if ($nm == "terms") {
   $name = 'Условия использования';
   $content = '   <h2>Условия использования</h2>
   <p style="border: solid 1px red">⚠️ Пользуясь данным веб-сайтом, Вы принимаете его <a href="/doc.php?section=policies&name=privacy">Политику конфиденциальности</a> и Условия использования <em>(см. ниже)</em>.</p>
   <h3 id="section1">Публикация материалов «18+»</h3>
   <p id="section1@1">На этом сайте запрещена публикация материалов «18+».</p>
   <hr noshade color="grey">
   <h3 id="section2">Использование сайта, нарушая закон(-ы)</h3>
   <p id="section1@1">Этот сайт запрещается использовать, нарушая закон(-ы).</p>
   <hr noshade color="grey">
   <h3 id="section3">Лицензиирование</h3>
   <p id="section3@1"><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Лицензия Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />Это произведение доступно по <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">лицензии Creative Commons «Attribution-NonCommercial» («Атрибуция-Некоммерчески») 4.0 Всемирная</a>.</p>
   <p id="section3@2">(Лицензия распространяется на код веб-сайта. Некоторые тексты и изображения распространяются под другими CC-лицензиями. Источник бо́льшей части изображений и некоторых текстов: <a href="https://logos.fandom.com/?uselang=ru">Логопедия (Фэндом) [Logopedia (Fandom)]</a>.)</p>
   <hr noshade color="grey">
   <h3 id="section4">Ещё</h3>
   <p id="section4@1">На этом Условия использования окончены. Также ознакомьтесь с <a href="/doc.php?section=policies&name=privacy">Политикой конфиденциальности</a> данного веб-сайта.</p>
   <p id="section4@2">При работе с данным веб-сайтом Вы автоматически принимаете Условия использования (изложены выше) и Политику конфиденциальности.</p>
';
 } else {
    if ($nm == "[null]") {
     $name = 'Содержание';
     $content = '   <h2>Документация</h2>
   <p>Список страниц документации:</p>
   <ul>
    <li><a href="/doc.php?section=&name=">Главная</a></li>
    <li><a href="/doc.php?section=policies&name=privacy">Политика конфиденциальности</a></li>
    <li><a href="/doc.php?section=policies&name=terms">Условия использования</a></li>
    <li><a href="/doc.php?section=version&name=whats-new">Что нового</a></li>
   </ul>';
   } else {
     $name = 'Ошибка 404';
     $content = '   <style type="text/css" media="all">.action { height: 50px; width: 50%; margin-left: 25%; background: dodgerblue; color: white; border: none; border-radius: 25px; outline: none; user-select: none; } .action:hover { color: rgb(230, 230, 230); } .action:focus { background: skyblue; color: black; } .alternate { color: dodgerblue; border: solid 0.2px lightblue; height: 30px; width: 70px; }</style>
   <h2>Ошибка 404</h2>
   <p>Указанный документ не найден.</p>
   <button onclick="window.location.reload()" class="action">Повторить попытку</button><br>
   <a href="javascript:history.back()" class="alternate">&lt; Назад</a>';
   }
  }
 }
}


echo '<!DOCTYPE html>
<html lang="ru" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>'.$name.' ('.$section.') — Документация | История логотипов Google Play</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="skyblue">
  <meta name="msapplication-navbutton-color" content"skyblue">
  <meta name="apple-mobile-web-app-capable" content="yes"> <meta name="apple-mobile-web-app-status-bar-style" content="skyblue">
  <link rel="stylesheet" href="../static/css/1.css" media="all">
  <style>body {font-family: Arial, Verdana;}</style>
 </head>
 <body>
  <header>
   <noscript>У Вас отключён JavaScript. Вообще, только PHP и HTML здесь обойтись можно, но Вам будет неудобно :)<br></noscript>
   <a href="/index.php" rel="prefetch">История логотипов Google Play</a>
  </header>
  <article>
   <p class="path"><span style="color: grey;"><a href="/doc.php">Документация</a> / <a href="/doc.php?section='.$sect.'">'.$section.'</a> /</span> <a href="/doc.php?section='.$sect.'&name='.$nm.'">'.$name.'</a></p>
';

echo $content;

echo '
  </article>
  <footer>
   <p class="google-trademarks"><em>Google, Android, Google Play и другие названия являются товарными знаками компании Google LLC.</em></p>
   <p class="version">Версия <strong>1.0</strong> (<a href="/doc.php?section=version&name=whats-new">что нового</a>)</p>
   <p class="policies"><a href="/doc.php?section=policies&name=privacy">Политика конфиденциальности</a> — <a href="/doc.php?section=policies&name=terms">Условия использования</a></p>
  </footer>

  <!-- JavaScript -->
  <script type="text/javascript" src="../static/js/1.js"></script>
  </script>
 </body>
</html>';

?>