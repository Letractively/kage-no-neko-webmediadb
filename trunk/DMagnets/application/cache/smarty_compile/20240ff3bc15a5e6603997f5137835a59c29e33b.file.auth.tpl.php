<?php /* Smarty version Smarty 3.1.4, created on 2011-11-27 16:42:47
         compiled from "C:\Server\DMagnets\application\views\templates\partials\auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42184ed2426c63dc18-58170118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20240ff3bc15a5e6603997f5137835a59c29e33b' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\views\\templates\\partials\\auth.tpl',
      1 => 1322404965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42184ed2426c63dc18-58170118',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed2426c6d961',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed2426c6d961')) {function content_4ed2426c6d961($_smarty_tpl) {?><form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
' method="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getMethod();?>
" action="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getAction();?>
">
  <table id='auth_tab' border="0" cellspacing="1" cellpadding="0" width="100%">
    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->email;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->pass;?>

  </table>
  <table id='auth_tab' border="0" cellspacing="1" cellpadding="0" width="100%">
    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->submit;?>

    <tr>
      <td colspan="2" style="text-align: center;">
        <a href="/registration">регистрация</a>
      </td>
    </tr>
  </table>
</form><?php }} ?>