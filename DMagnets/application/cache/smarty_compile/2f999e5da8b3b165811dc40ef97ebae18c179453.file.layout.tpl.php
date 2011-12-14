<?php /* Smarty version Smarty 3.1.4, created on 2011-12-13 22:50:12
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50364ed4e695f2c056-66090131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f999e5da8b3b165811dc40ef97ebae18c179453' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\layout.tpl',
      1 => 1323807519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50364ed4e695f2c056-66090131',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed4e6961755f',
  'variables' => 
  array (
    'debugModeFlag' => 0,
    'this' => 0,
    'sidebar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed4e6961755f')) {function content_4ed4e6961755f($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['debugModeFlag']->value){?>
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