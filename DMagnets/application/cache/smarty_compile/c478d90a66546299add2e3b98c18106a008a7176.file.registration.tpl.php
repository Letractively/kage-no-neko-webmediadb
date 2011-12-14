<?php /* Smarty version Smarty 3.1.4, created on 2011-12-04 17:11:00
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\partials\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130894edb8d84243f96-95724925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c478d90a66546299add2e3b98c18106a008a7176' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\partials\\registration.tpl',
      1 => 1322412512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130894edb8d84243f96-95724925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edb8d8434b65',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edb8d8434b65')) {function content_4edb8d8434b65($_smarty_tpl) {?>        <form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
' enctype="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getEnctype();?>
" method="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getMethod();?>
" action="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getAction();?>
">
          <table id='reg_tab'>
            <tr>
              <td colspan="2" style="border-bottom: 2px solid rgb(202,81,10);">
                <h2>Форма регистрации</h2>
              </td>
            </tr>
            <tr><td id='space' colspan="2"></td></tr>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->email;?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->pass;?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->pass2;?>

            <tr><td id='space' colspan="2"></td></tr>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->nickname;?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->first_name;?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->last_name;?>

            <tr><td id='space' colspan="2"></td></tr>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->sex;?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->birthday;?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->avatar_upl;?>

            <tr><td id='space' colspan="2"></td></tr>
            <tr><td id='space' colspan="2"></td></tr>
            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->reset;?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->element->submit;?>

          </table>
        </form><?php }} ?>