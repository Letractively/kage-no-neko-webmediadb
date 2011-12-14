<?php /* Smarty version Smarty 3.1.4, created on 2011-11-29 13:24:51
         compiled from "C:\Server\DMagnets\application\views\templates\profile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277784ed4c0470cdc75-49174571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32055b432480327140c57593ed01fd94503f049e' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\views\\templates\\profile\\index.tpl',
      1 => 1322565872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277784ed4c0470cdc75-49174571',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed4c047269eb',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed4c047269eb')) {function content_4ed4c047269eb($_smarty_tpl) {?>		<h2 style="margin: 10px 0 0 10px;">Ваш профиль</h2>
        <div id='profile'>
          <div id='owner_bttn'>
            <img id='edit_profile' title="Редактировать профиль" style="cursor: pointer;" src="/resources/edit_prof.png"/>
            <img id='delete_profile' title="Удалить профиль" style="cursor: pointer;" src="/resources/delete_prof.png"/>
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
                <td>E-mail:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_mail'];?>
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
        </div><?php }} ?>