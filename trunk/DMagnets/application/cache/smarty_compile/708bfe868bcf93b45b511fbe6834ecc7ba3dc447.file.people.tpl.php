<?php /* Smarty version Smarty 3.1.4, created on 2011-12-06 22:25:43
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\partials\people.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80344ede6dbe8ccb97-02277449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708bfe868bcf93b45b511fbe6834ecc7ba3dc447' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\partials\\people.tpl',
      1 => 1323203140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80344ede6dbe8ccb97-02277449',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ede6dbe9b008',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ede6dbe9b008')) {function content_4ede6dbe9b008($_smarty_tpl) {?><form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
' method="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getMethod();?>
" action="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getAction();?>
">
  <table id='form_tab'>
    <tr>
      <td colspan="2" style="border-bottom: 2px solid rgb(202,81,10);">
        <h2>Добавить <?php if ($_smarty_tpl->tpl_vars['this']->value->element->getName()=='actor'){?>актера<?php }else{ ?>режиссера<?php }?></h2>
      </td>
    </tr>
    <tr><td id='space' colspan="2"></td></tr>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->first_name;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->last_name;?>

    <tr><td id='space' colspan="2"></td></tr>
    <tr><td id='space' colspan="2"></td></tr>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->cencel;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->submit;?>

  </table>
</form><?php }} ?>