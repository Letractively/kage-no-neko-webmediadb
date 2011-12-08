{*debug*}
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  {$this->headTitle()}
  {$this->headLink()}
  {$this->headScript()}
</head>
<body>
  <div id='page_wrap'>
<!-- ******************************** Header ******************************** -->
    <div id='header'>
      <center>
        <div id='logo' align="center"></div>
<!-- ********************************* Menu ********************************* -->
        <div id='menu'>
          <ul>
            <li id='menu_1' ><a>Главная</a>
              <ul>
                <li><a href="/">Dialog</a></li>
                <li><a href="/media">D Magnets</a></li>
              </ul>
            </li>
            <li id='menu_2' ><a href="/media/video">Видео</a>
              <ul>
                <li><a href="/media/video/movies">Фильмы</a></li>
                <li><a href="/media/video/cartoons">Мультфильмы</a></li>
                <li><a href="/media/video/serials">Сериалы</a></li>
                <li><a href="/media/video/cserials">Мультсериалы</a></li>
              </ul>
            </li>
            <li id='menu_3' ><a style="text-decoration: line-through;">Музыка</a></li>
            <li id='menu_4' ><a style="text-decoration: line-through;">Игры</a></li>
            <li id='menu_5' ><a style="text-decoration: line-through;">Галерея</a></li>
            <li id='menu_6' ><a href="/forum">Форум</a></li>
          </ul>  
        </div>
      </center>
    </div>
    <!-- ******************************** Middle ******************************** -->
    <div id='middle'>
      <div id='conteiner'>
      {$this->layout()->content}
      </div>
      {if $sidebar}{include file="./partials/sidebar.tpl"}{/if}
    </div>
  </div>
  <!-- ******************************** Footer ******************************** -->
  <div id='footer'><a href="http://vkontakte.ru/kage_no_neko"><img alt="author" title="Created by:" src="/resources/author.png" style="width: 250px; height: 190px; margin: 0 0 -2px 0;"></a></div>
</body>
</html>