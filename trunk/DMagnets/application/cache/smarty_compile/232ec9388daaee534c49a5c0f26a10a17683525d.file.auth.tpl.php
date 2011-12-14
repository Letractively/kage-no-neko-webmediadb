<?php /* Smarty version Smarty 3.1.4, created on 2011-12-03 18:26:27
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\partials\auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68524eda4db39ed445-73732188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '232ec9388daaee534c49a5c0f26a10a17683525d' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\partials\\auth.tpl',
      1 => 1322404965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68524eda4db39ed445-73732188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eda4db3b9518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eda4db3b9518')) {function content_4eda4db3b9518($_smarty_tpl) {?><form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
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