<?php /* Smarty version Smarty 3.1.4, created on 2011-12-03 18:29:05
         compiled from "C:\Server\DMagnets\application\modules\default\views\templates\profile\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315174eda4e512bd8e8-63182818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f6b41c65f69f70355e08e3289259baf0359a020' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\default\\views\\templates\\profile\\show.tpl',
      1 => 1322572022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315174eda4e512bd8e8-63182818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eda4e51470bd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eda4e51470bd')) {function content_4eda4e51470bd($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user']->value!=null){?>
        <h2 style="margin: 10px 0 0 10px;">Профиль пользователя: <span style="color: rgb(202,81,10);"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</span></h2>
        <div id='profile'>
          <div id='guest_bttn'>
            <img id='send_email' title="Отправить e-mail" style="cursor: pointer;" src="/resources/mail.png"/>
          </div>
          <div id='profile_info' style="z-index: 100; display: block;">
            <table style="border-spacing:0px;">
              <tr>
                <td>Полное имя:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['user_last_name'];?>
</td>
              </tr>
              <tr>
                <td>Пол:</td>
                <td><?php if ($_smarty_tpl->tpl_vars['user']->value['gender']=='male'){?>мужской<?php }else{ ?>женский<?php }?></td>
              </tr>
              <tr>
                <td>Дата рождения:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_birthday'];?>
</td>
              </tr>
              <tr>
                <td>Группа:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['group'];?>
</td>
              </tr>
              <tr>
                <td>Дата регистрации:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['reg_date'];?>
</td>
              </tr>
            </table>
          </div>
        </div>
<?php }else{ ?>
<h2 style="margin: 10px 0 0 10px;">Профиль пользователя не найден</h2>
<?php }?><?php }} ?>