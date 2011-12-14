<?php /* Smarty version Smarty 3.1.4, created on 2011-12-02 20:26:11
         compiled from "C:\Server\DMagnets\application\modules\default\views\templates\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80374ed9184332bcb2-86727237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '225151940754d67c7c905d765bcf41293eded357' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\default\\views\\templates\\error\\error.tpl',
      1 => 1321919362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80374ed9184332bcb2-86727237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'exception' => 0,
    'last_log' => 0,
    'request' => 0,
    'name' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed918436873d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed918436873d')) {function content_4ed918436873d($_smarty_tpl) {?><div style="position: fixed; top: 50%; left: 50%; width: 800px; height: 600px; margin: -300px 0 0 -400px; padding: 5px 0 0 5px; background-color: black; border: 2px solid grey; z-index: 999; overflow: scroll;">
  <h1>An error occurred</h1>
  <h3>Type:</h3>
  <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
  <br>
<?php if ((isset($_smarty_tpl->tpl_vars['exception']->value))){?>
  
  <h3>Exception information:</h3>
  <p>
      <b>Message:</b> <?php echo $_smarty_tpl->tpl_vars['exception']->value->getMessage();?>

  </p>
  <br>
  <?php if ($_smarty_tpl->tpl_vars['last_log']->value!='none'){?>
  <h3>Last in error.log:</h3>
  <pre><?php echo $_smarty_tpl->tpl_vars['last_log']->value;?>
</pre>
  <br>
  <?php }?>
  
  <h3>Stack trace:</h3>
  <pre><?php echo $_smarty_tpl->tpl_vars['exception']->value->getTraceAsString();?>
</pre>
  <br>
  
  <h3>Request Parameters:</h3>
  <pre>
  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['request']->value->getParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
  [<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]=><?php echo $_smarty_tpl->tpl_vars['val']->value;?>

  <?php } ?>
  </pre>
<?php }?>
</div><?php }} ?>