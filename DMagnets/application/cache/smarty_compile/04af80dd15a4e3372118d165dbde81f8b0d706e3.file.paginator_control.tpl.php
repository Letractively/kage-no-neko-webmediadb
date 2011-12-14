<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 19:21:18
         compiled from "C:\Server\DMagnets\application\views\templates\partials\paginator_control.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289284eca6ca11cc518-14362069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04af80dd15a4e3372118d165dbde81f8b0d706e3' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\views\\templates\\partials\\paginator_control.tpl',
      1 => 1321896067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289284eca6ca11cc518-14362069',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eca6ca125cc7',
  'variables' => 
  array (
    'this' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eca6ca125cc7')) {function content_4eca6ca125cc7($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['this']->value->pageCount){?>
<div class="paginating_control">
  <?php if (isset($_smarty_tpl->tpl_vars['this']->value->previous)){?>
  <a href="/media/video/page/<?php echo $_smarty_tpl->tpl_vars['this']->value->previous;?>
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
    <a href="/media/video/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a> |
    <?php }else{ ?>
      <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 |
    <?php }?>
  <?php } ?>
  <?php if (isset($_smarty_tpl->tpl_vars['this']->value->next)){?>
  <a href="/media/video/page/<?php echo $_smarty_tpl->tpl_vars['this']->value->next;?>
">Next &gt;</a>
  <?php }else{ ?>
  <span class="disabled">Next &gt;</span>
  <?php }?>
</div>
<?php }?><?php }} ?>