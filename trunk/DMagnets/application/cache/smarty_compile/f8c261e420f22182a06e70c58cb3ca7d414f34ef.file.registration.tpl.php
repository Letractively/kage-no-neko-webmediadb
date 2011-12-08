<?php /* Smarty version Smarty 3.1.4, created on 2011-12-06 22:22:11
         compiled from "C:\Server\DMagnets\application\modules\default\views\templates\partials\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307254eda4e34080b82-94299063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8c261e420f22182a06e70c58cb3ca7d414f34ef' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\default\\views\\templates\\partials\\registration.tpl',
      1 => 1323202836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307254eda4e34080b82-94299063',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eda4e341a9b1',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eda4e341a9b1')) {function content_4eda4e341a9b1($_smarty_tpl) {?>        <form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
' enctype="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getEnctype();?>
" method="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getMethod();?>
" action="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getAction();?>
">
          <table id='form_tab'>
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