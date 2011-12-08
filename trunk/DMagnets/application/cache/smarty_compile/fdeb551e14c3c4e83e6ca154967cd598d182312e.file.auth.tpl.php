<?php /* Smarty version Smarty 3.1.4, created on 2011-12-02 20:31:50
         compiled from "C:\Server\DMagnets\application\modules\default\views\templates\partials\auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215624ed91996505664-30311816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdeb551e14c3c4e83e6ca154967cd598d182312e' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\default\\views\\templates\\partials\\auth.tpl',
      1 => 1322404965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215624ed91996505664-30311816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed919965de63',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed919965de63')) {function content_4ed919965de63($_smarty_tpl) {?><form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
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