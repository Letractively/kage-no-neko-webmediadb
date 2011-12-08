<?php /* Smarty version Smarty 3.1.4, created on 2011-12-07 15:02:42
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102414edb869fdeba22-79789984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a955d5758f84c79c0dbd627b80b65f6c92256ab7' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\user\\index.tpl',
      1 => 1323262927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102414edb869fdeba22-79789984',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edb869ff2752',
  'variables' => 
  array (
    'all_users' => 0,
    'paginatorParam' => 0,
    'this' => 0,
    'one_user' => 0,
    'currentUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edb869ff2752')) {function content_4edb869ff2752($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../partials/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='admin_sub_bttn'>
  <a href="/admin/user/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_users']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

  <table id='all_users' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Логин</td>
        <td>Ф.И.</td>
        <td>Группа</td>
        <td>Дата регистрации</td>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['one_user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_user']->key => $_smarty_tpl->tpl_vars['one_user']->value){
$_smarty_tpl->tpl_vars['one_user']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['one_user']->value['user_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_user']->value['nickname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_user']->value['user_first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['one_user']->value['user_last_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_user']->value['group'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_user']->value['reg_date'];?>
</td>
        <td class="act">
        <?php if ($_smarty_tpl->tpl_vars['one_user']->value['user_id']!=$_smarty_tpl->tpl_vars['currentUser']->value['user_id']){?>
        <?php }?>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_users']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

</div><?php }} ?>