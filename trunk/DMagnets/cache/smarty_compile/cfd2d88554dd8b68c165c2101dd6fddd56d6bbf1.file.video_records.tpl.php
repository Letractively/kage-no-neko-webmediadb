<?php /* Smarty version Smarty 3.1.4, created on 2011-11-22 01:50:41
         compiled from "C:\Server\DMagnets\application\views\templates\partials\video_records.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152354eca6ca0d67dc1-04799206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd2d88554dd8b68c165c2101dd6fddd56d6bbf1' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\views\\templates\\partials\\video_records.tpl',
      1 => 1321919437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152354eca6ca0d67dc1-04799206',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eca6ca113a48',
  'variables' => 
  array (
    'paginator' => 0,
    'this' => 0,
    'record' => 0,
    'total' => 0,
    'none_col' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eca6ca113a48')) {function content_4eca6ca113a48($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['paginator']->value,'Sliding','partials/paginator_control.tpl');?>

<table id='video_list'>
  <tr>
<?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['list']['iteration']++;
?>
    <td>
      <a href="/video/item/id/<?php echo $_smarty_tpl->tpl_vars['record']->value['film_id'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
" src="/resources/posters/<?php echo $_smarty_tpl->tpl_vars['record']->value['poster'];?>
"></a>
      <h3><a href="/video/item/id/<?php echo $_smarty_tpl->tpl_vars['record']->value['film_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['record']->value['original_name']!=''){?> / <?php echo $_smarty_tpl->tpl_vars['record']->value['original_name'];?>
<?php }?></a></h3>
    </td>
  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['list']['iteration']==$_smarty_tpl->tpl_vars['total']->value&&($_smarty_tpl->tpl_vars['total']->value % 5)){?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['for'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['for']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['name'] = 'for';
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['none_col']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['for']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['for']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['for']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['for']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['for']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['for']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['for']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['for']['total']);
?>
    <td class='none'></td>
    <?php endfor; endif; ?>
  <?php }?>
  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['list']['iteration']!=$_smarty_tpl->tpl_vars['total']->value&&!($_smarty_tpl->getVariable('smarty')->value['foreach']['list']['iteration'] % 5)){?>
  </tr>
  <tr>
  <?php }?>
<?php } ?>
  </tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['paginator']->value,'Sliding','partials/paginator_control.tpl');?>
<?php }} ?>