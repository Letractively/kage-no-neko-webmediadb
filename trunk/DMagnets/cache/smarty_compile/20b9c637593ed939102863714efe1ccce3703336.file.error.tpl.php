<?php /* Smarty version Smarty 3.1.4, created on 2011-11-22 01:49:24
         compiled from "C:\Server\DMagnets\application\views\templates\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197694eca6ca12ef356-21893187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b9c637593ed939102863714efe1ccce3703336' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\views\\templates\\error\\error.tpl',
      1 => 1321919362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197694eca6ca12ef356-21893187',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eca6ca1362d6',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eca6ca1362d6')) {function content_4eca6ca1362d6($_smarty_tpl) {?><div style="position: fixed; top: 50%; left: 50%; width: 800px; height: 600px; margin: -300px 0 0 -400px; padding: 5px 0 0 5px; background-color: black; border: 2px solid grey; z-index: 999; overflow: scroll;">
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