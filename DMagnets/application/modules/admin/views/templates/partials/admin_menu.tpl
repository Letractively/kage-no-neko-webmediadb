<h2 style="margin: 10px 10px 0 10px;border-bottom: 1px solid rgb(202,81,10);color: rgb(202,81,10);">Управление сайтом{strip}
  {if $controller == 'index'}
  {elseif $controller == 'user'}: пользователи
  {elseif $controller == 'movie'}: медиа: фильмы
  {elseif $controller == 'serial'}: медиа: сериалы
  {elseif $controller == 'actor'}: медиа: актеры
  {elseif $controller == 'director'}: медиа: режиссеры
  {elseif $controller == 'country'}: медиа: страны
  {elseif $controller == 'genre'}: медиа: жанры
  {elseif $controller == 'section'}: форум: разделы
  {elseif $controller == 'topic'}: форум: темы
  {/if}
{/strip}</h2>
<div id='admin_bttn'>
  <a href="/admin/user">Пользователи{*<img title="Пользователи" src="/resources/users.png"/>*}</a>
  {*<a href="/admin/video"><img title="Файлы" src="/resources/files.png"/></a>*}
  <a href="/admin/movie">Фильмы{*<img title="Видеоконтент" src="/resources/video.png"/>*}</a>
  <a href="/admin/serial">Сериалы{*<img title="Видеоконтент" src="/resources/video.png"/>*}</a>
  <a href="/admin/actor">Актеры{*<img title="Актеры" src="/resources/actor.png"/>*}</a>
  <a href="/admin/director">Режиссеры{*<img title="Режиссеры" src="/resources/director.png"/>*}</a>
  <a href="/admin/country">Страны{*<img title="Страны" src="/resources/country.png"/>*}</a>
  <a href="/admin/genre">Жанры{*<img title="Жанры" src="/resources/genre.png"/>*}</a>
  <a href="/admin/section">Разделы{*<img title="Разделы" src="/resources/section.png"/>*}</a>
  <a href="/admin/topic">Темы{*<img title="Темы" src="/resources/topic.png"/>*}</a>
</div>