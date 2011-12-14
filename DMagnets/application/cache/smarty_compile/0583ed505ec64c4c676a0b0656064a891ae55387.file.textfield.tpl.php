<?php /* Smarty version Smarty 3.1.4, created on 2011-12-06 23:56:19
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\partials\textfield.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91524ede8f83aaefb8-20015621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0583ed505ec64c4c676a0b0656064a891ae55387' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\partials\\textfield.tpl',
      1 => 1323207832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91524ede8f83aaefb8-20015621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ede8f83b9aeb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ede8f83b9aeb')) {function content_4ede8f83b9aeb($_smarty_tpl) {?><form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
' method="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getMethod();?>
" action="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getAction();?>
">
  <table id='form_tab'>
    <tr>
      <td colspan="2" style="border-bottom: 2px solid rgb(202,81,10);">
        <h2>Добавить <?php if ($_smarty_tpl->tpl_vars['this']->value->element->getName()=='country'){?>страну<?php }else{ ?>жанр<?php }?></h2>
      </td>
    </tr>
    <tr><td id='space' colspan="2"></td></tr>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->name;?>

    <tr><td id='space' colspan="2"></td></tr>
    <tr><td id='space' colspan="2"></td></tr>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->cencel;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->submit;?>

  </table>
</form><?php }} ?>