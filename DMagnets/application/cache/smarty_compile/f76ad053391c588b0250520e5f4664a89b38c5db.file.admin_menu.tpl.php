<?php /* Smarty version Smarty 3.1.4, created on 2011-12-07 18:59:53
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\partials\admin_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108024edb8a5eb52e65-71805155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f76ad053391c588b0250520e5f4664a89b38c5db' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\partials\\admin_menu.tpl',
      1 => 1323277190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108024edb8a5eb52e65-71805155',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edb8a5eb5eac',
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edb8a5eb5eac')) {function content_4edb8a5eb5eac($_smarty_tpl) {?><h2 style="margin: 10px 10px 0 10px;border-bottom: 1px solid rgb(202,81,10);color: rgb(202,81,10);">Управление сайтом<?php if ($_smarty_tpl->tpl_vars['controller']->value=='index'){?><?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='user'){?>: пользователи<?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='movie'){?>: медиа: фильмы<?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='serial'){?>: медиа: сериалы<?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='actor'){?>: медиа: актеры<?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='director'){?>: медиа: режиссеры<?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='country'){?>: медиа: страны<?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='genre'){?>: медиа: жанры<?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='section'){?>: форум: разделы<?php }elseif($_smarty_tpl->tpl_vars['controller']->value=='topic'){?>: форум: темы<?php }?></h2>
<div id='admin_bttn'>
  <a href="/admin/user">Пользователи</a>
  <a href="/admin/movie">Фильмы</a>
  <a href="/admin/serial">Сериалы</a>
  <a href="/admin/actor">Актеры</a>
  <a href="/admin/director">Режиссеры</a>
  <a href="/admin/country">Страны</a>
  <a href="/admin/genre">Жанры</a>
  <a href="/admin/section">Разделы</a>
  <a href="/admin/topic">Темы</a>
</div><?php }} ?>