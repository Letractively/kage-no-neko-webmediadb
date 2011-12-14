<?php /* Smarty version Smarty 3.1.4, created on 2011-12-08 08:09:44
         compiled from "C:\Server\DMagnets\application\modules\default\views\templates\error\denied.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290744eda59d144d8f0-05097350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e882a38ce22d118760b23acd66bfc7f388773b83' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\default\\views\\templates\\error\\denied.tpl',
      1 => 1323272239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290744eda59d144d8f0-05097350',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eda59d14b3c0',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eda59d14b3c0')) {function content_4eda59d14b3c0($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\Server\DMagnets\library\Smarty\plugins\modifier.truncate.php';
?>
<div style="margin: 10px;">
<h2>Вы не имеете прав доступа к данному ресурсу</h2>
<?php if (smarty_modifier_truncate($_smarty_tpl->tpl_vars['this']->value->url(),6,'')!='/admin'&&smarty_modifier_truncate($_smarty_tpl->tpl_vars['this']->value->url(),13,'')!='/registration'){?>
<p>Пожалуйста войдите или <a href="/registration">зарегистрируйтесь</a></p>
<?php }?>
</div><?php }} ?>