<?php /* Smarty version Smarty 3.1.4, created on 2011-12-06 13:55:07
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\partials\paginator_control.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238664eddf7bd836103-15103638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52cebace2b39f6b29be08b58071bc7560d2d8fef' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\partials\\paginator_control.tpl',
      1 => 1323172505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238664eddf7bd836103-15103638',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eddf7bd931de',
  'variables' => 
  array (
    'this' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eddf7bd931de')) {function content_4eddf7bd931de($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['this']->value->pageCount){?>
<div class="paginating_control">
  <?php if (isset($_smarty_tpl->tpl_vars['this']->value->previous)){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->urlPart;?>
/page/<?php echo $_smarty_tpl->tpl_vars['this']->value->previous;?>
">&lt; Previous</a> |
  <?php }else{ ?>
  <span class="disabled">&lt; Previous</span> |
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->pagesInRange; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['this']->value->current){?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->urlPart;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a> |
    <?php }else{ ?>
      <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 |
    <?php }?>
  <?php } ?>
  <?php if (isset($_smarty_tpl->tpl_vars['this']->value->next)){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->urlPart;?>
/page/<?php echo $_smarty_tpl->tpl_vars['this']->value->next;?>
">Next &gt;</a>
  <?php }else{ ?>
  <span class="disabled">Next &gt;</span>
  <?php }?>
</div>
<?php }?><?php }} ?>