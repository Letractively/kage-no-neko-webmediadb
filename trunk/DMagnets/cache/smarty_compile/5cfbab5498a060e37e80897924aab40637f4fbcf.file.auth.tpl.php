<?php /* Smarty version Smarty 3.1.4, created on 2011-12-02 19:41:08
         compiled from "C:\Server\DMagnets\application\modules\media\views\templates\partials\auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88874ed90db4d1b422-41018838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cfbab5498a060e37e80897924aab40637f4fbcf' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\media\\views\\templates\\partials\\auth.tpl',
      1 => 1322404965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88874ed90db4d1b422-41018838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed90db4da088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed90db4da088')) {function content_4ed90db4da088($_smarty_tpl) {?><form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
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