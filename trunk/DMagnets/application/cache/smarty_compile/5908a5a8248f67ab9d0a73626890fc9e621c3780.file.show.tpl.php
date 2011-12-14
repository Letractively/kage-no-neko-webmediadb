<?php /* Smarty version Smarty 3.1.4, created on 2011-11-29 15:07:10
         compiled from "C:\Server\DMagnets\application\views\templates\profile\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77154ecd4debcd1736-67968105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5908a5a8248f67ab9d0a73626890fc9e621c3780' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\views\\templates\\profile\\show.tpl',
      1 => 1322572022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77154ecd4debcd1736-67968105',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ecd4debdcb48',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecd4debdcb48')) {function content_4ecd4debdcb48($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user']->value!=null){?>
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