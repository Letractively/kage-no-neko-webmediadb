<?php /* Smarty version Smarty 3.1.4, created on 2011-12-04 14:54:03
         compiled from "C:\Server\DMagnets\application\modules\default\views\templates\auth\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219664edb69c689f577-23375024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0284d9f3c9ff0c38a825266ea3bf1f134ba2bd2' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\default\\views\\templates\\auth\\index.tpl',
      1 => 1323003242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219664edb69c689f577-23375024',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edb69c68f60a',
  'variables' => 
  array (
    'this' => 0,
    'authForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edb69c68f60a')) {function content_4edb69c68f60a($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php echo $_smarty_tpl->tpl_vars['this']->value->headTitle();?>

  <?php echo $_smarty_tpl->tpl_vars['this']->value->headLink();?>

  <?php echo $_smarty_tpl->tpl_vars['this']->value->headScript();?>

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
      <div style="position: relative; top: 0; left: 50%; width: 200px; height: 100px; margin: 0 0 0 -100px; padding-top: 10px; padding-left: 10px; background-color: rgba(0,0,0,0.5); border: 2px solid grey; z-index: 999;">
      <div id='auth_err'>
            <img src="/resources/loader.gif">
          </div>
        <?php echo $_smarty_tpl->tpl_vars['authForm']->value;?>

      </div>
    </div>
  </div>
  <!-- ******************************** Footer ******************************** -->
  <div id='footer'><a href="http://vkontakte.ru/kage_no_neko"><img alt="author" title="Created by:" src="/resources/author.png" style="width: 250px; height: 190px; margin: 0 0 -2px 0;"></a></div>
</body>
</html><?php }} ?>