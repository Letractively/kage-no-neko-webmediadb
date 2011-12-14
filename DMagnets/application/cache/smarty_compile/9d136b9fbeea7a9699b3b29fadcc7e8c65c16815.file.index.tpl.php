<?php /* Smarty version Smarty 3.1.4, created on 2011-11-21 18:27:48
         compiled from "C:\Server\DMagnets\application\views\templates\movie\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159184eca7bcc3fd455-85632081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d136b9fbeea7a9699b3b29fadcc7e8c65c16815' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\views\\templates\\movie\\index.tpl',
      1 => 1321892853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159184eca7bcc3fd455-85632081',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eca7bcc546b3',
  'variables' => 
  array (
    'paginator' => 0,
    'film' => 0,
    'none_col' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eca7bcc546b3')) {function content_4eca7bcc546b3($_smarty_tpl) {?>        <table id='content'>
          <tr>
<?php  $_smarty_tpl->tpl_vars['film'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['film']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['film']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['film']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lst']['total'] = $_smarty_tpl->tpl_vars['film']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lst']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['film']->key => $_smarty_tpl->tpl_vars['film']->value){
$_smarty_tpl->tpl_vars['film']->_loop = true;
 $_smarty_tpl->tpl_vars['film']->iteration++;
 $_smarty_tpl->tpl_vars['film']->last = $_smarty_tpl->tpl_vars['film']->iteration === $_smarty_tpl->tpl_vars['film']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lst']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lst']['last'] = $_smarty_tpl->tpl_vars['film']->last;
?>
            <td>
              <a href=""><img alt="<?php echo $_smarty_tpl->tpl_vars['film']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['film']->value['name'];?>
" src="resources/posters/<?php echo $_smarty_tpl->tpl_vars['film']->value['poster'];?>
"></a>
              <h3><a href=""><?php echo $_smarty_tpl->tpl_vars['film']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['film']->value['original_name']!=''){?> / <?php echo $_smarty_tpl->tpl_vars['film']->value['original_name'];?>
<?php }?></a></h3>
              <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lst']['last']){?><h1>last</h1><?php }?>
            </td>
  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['lst']['last']&&($_smarty_tpl->getVariable('smarty')->value['foreach']['lst']['total'] % 5)){?>
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
  <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['lst']['last']&&!($_smarty_tpl->getVariable('smarty')->value['foreach']['lst']['iteration'] % 5)){?>
          </tr>
          <tr>
  <?php }?>
<?php } ?>
          </tr>
        </table><?php }} ?>