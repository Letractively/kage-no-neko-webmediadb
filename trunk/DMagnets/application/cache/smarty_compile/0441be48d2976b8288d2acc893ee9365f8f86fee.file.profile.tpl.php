<?php /* Smarty version Smarty 3.1.4, created on 2011-11-23 21:40:27
         compiled from "C:\Server\DMagnets\application\views\templates\user\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77794eccfcd04200b2-03902903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0441be48d2976b8288d2acc893ee9365f8f86fee' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\views\\templates\\user\\profile.tpl',
      1 => 1322077217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77794eccfcd04200b2-03902903',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eccfcd0470b2',
  'variables' => 
  array (
    'user' => 0,
    'isMe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eccfcd0470b2')) {function content_4eccfcd0470b2($_smarty_tpl) {?>        <h2 style="margin: 10px 0 0 10px;">Профиль пользователя: <span style="color: rgb(202,81,10);"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</span></h2>
        <div id='profile'>
        <?php if ($_smarty_tpl->tpl_vars['isMe']->value){?>
          <div id='owner_bttn'>
            <img id='edit_profile' title="Редактировать профиль" style="cursor: pointer;" src="/resources/edit_prof.png"/>
            <img id='delete_profile' title="Удалить профиль" style="cursor: pointer;" src="/resources/delete_prof.png"/>
          </div>
        <?php }else{ ?>
          <div id='guest_bttn'>
            <img id='send_email' title="Отправить e-mail" style="cursor: pointer;" src="/resources/mail.png"/>
          </div>
        <?php }?>
          <div id='profile_info' style="z-index: 100; display: block;">
            <table style="border-spacing:0px;">
              <tr>
                <td>Полное имя:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['user_last_name'];?>
</td>
                <td style="display:none;"></td>
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
              <?php if ($_smarty_tpl->tpl_vars['isMe']->value){?>
              <tr>
                <td>E-mail:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_mail'];?>
</td>
              </tr>
              <?php }?>
              <tr>
                <td>Группа:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['group'];?>
</td>
                <td style="display:none;"></td>
              </tr>
              <tr>
                <td>Дата регистрации:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['reg_date'];?>
</td>
                <td style="display:none;"></td>
              </tr>
            </table>
          </div>
        </div><?php }} ?>