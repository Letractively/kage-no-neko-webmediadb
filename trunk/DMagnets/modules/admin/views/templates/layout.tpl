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
                <li><a href="/admin">Админка</a></li>
                <li><a href="/">На сайт</a></li>
              </ul>
            </li>
            <li id='menu_2' ><a>Медиа</a>
              <ul>
                <li><a href="/admin/movie">Фильмы</a></li>
                <li><a href="/admin/serial">Сериалы</a></li>
              </ul>
            </li>
            <li id='menu_3' ><a>Люди</a>
              <ul>
                <li><a href="/admin/user">Пользователи</a></li>
                <li><a href="/admin/actor">Актеры</a></li>
                <li><a href="/admin/director">Режиссеры</a></li>
              </ul>
            </li>
            <li id='menu_4' ><a href="/admin/country">Страны</a></li>
            <li id='menu_5' ><a href="/admin/genre">Жанры</a></li>
            <li id='menu_6' ><a>Форум</a>
              <ul>
                <li><a href="/admin/section">Разделы</a></li>
                <li><a href="/admin/topic">Темы</a></li>
              </ul>
            </li>
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