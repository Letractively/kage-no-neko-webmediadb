<?php /* Smarty version Smarty 3.1.4, created on 2011-12-02 20:35:12
         compiled from "C:\Server\DMagnets\application\modules\media\views\templates\partials\paginator_control.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196814ed91a60f21a40-94322040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f3596b27d03e788e4eb94d56fdfdf8c835a84b' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\media\\views\\templates\\partials\\paginator_control.tpl',
      1 => 1321896067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196814ed91a60f21a40-94322040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed91a610d05f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed91a610d05f')) {function content_4ed91a610d05f($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['this']->value->pageCount){?>
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