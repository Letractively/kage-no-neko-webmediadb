<?php /* Smarty version Smarty 3.1.4, created on 2011-12-04 17:10:24
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\user\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126664edb8d6038a1b1-86385681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6779f86ccac3f333b2d01738fe04827a2555b944' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\user\\add.tpl',
      1 => 1323011422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126664edb8d6038a1b1-86385681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edb8d6040cc3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edb8d6040cc3')) {function content_4edb8d6040cc3($_smarty_tpl) {?><h2 style="margin: 10px 10px 0 10px;border-bottom: 1px solid rgb(202,81,10);color: rgb(202,81,10);">Управление сайтом</h2>
<?php echo $_smarty_tpl->getSubTemplate ("../partials/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
<?php }} ?>