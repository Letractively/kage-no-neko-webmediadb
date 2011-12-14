<?php /* Smarty version Smarty 3.1.4, created on 2011-12-14 19:22:46
         compiled from "C:\Server\DMagnets\application\modules\default\views\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146654ed90df9c641c6-86726316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f7550fccd237af540e537d2ddc4f2a47b50277' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\default\\views\\templates\\layout.tpl',
      1 => 1323807505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146654ed90df9c641c6-86726316',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed90df9cf822',
  'variables' => 
  array (
    'debugModeFlag' => 0,
    'this' => 0,
    'sidebar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed90df9cf822')) {function content_4ed90df9cf822($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['debugModeFlag']->value){?>
  <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
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
      <div id='conteiner'>
      <?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

      </div>
      <?php if ($_smarty_tpl->tpl_vars['sidebar']->value){?><?php echo $_smarty_tpl->getSubTemplate ("./partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
    </div>
  </div>
  <!-- ******************************** Footer ******************************** -->
  <div id='footer'><a href="http://vkontakte.ru/kage_no_neko"><img alt="author" title="Created by:" src="/resources/author.png" style="width: 250px; height: 190px; margin: 0 0 -2px 0;"></a></div>
</body>
</html><?php }} ?>