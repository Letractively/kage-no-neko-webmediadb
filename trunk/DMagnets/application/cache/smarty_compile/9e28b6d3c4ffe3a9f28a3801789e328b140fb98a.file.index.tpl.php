<?php /* Smarty version Smarty 3.1.4, created on 2011-12-03 18:28:47
         compiled from "C:\Server\DMagnets\application\modules\default\views\templates\profile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205704eda4e3f4cc655-98173998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e28b6d3c4ffe3a9f28a3801789e328b140fb98a' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\default\\views\\templates\\profile\\index.tpl',
      1 => 1322565872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205704eda4e3f4cc655-98173998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eda4e3f64e94',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eda4e3f64e94')) {function content_4eda4e3f64e94($_smarty_tpl) {?>		<h2 style="margin: 10px 0 0 10px;">Ваш профиль</h2>
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