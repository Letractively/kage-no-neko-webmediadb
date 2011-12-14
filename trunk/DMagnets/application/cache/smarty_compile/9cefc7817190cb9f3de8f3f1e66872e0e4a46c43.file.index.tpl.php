<?php /* Smarty version Smarty 3.1.4, created on 2011-12-07 15:02:50
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\director\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148494ede1cc5c47873-90533343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cefc7817190cb9f3de8f3f1e66872e0e4a46c43' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\director\\index.tpl',
      1 => 1323262946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148494ede1cc5c47873-90533343',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ede1cc5e4a32',
  'variables' => 
  array (
    'all_directors' => 0,
    'paginatorParam' => 0,
    'this' => 0,
    'one_director' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ede1cc5e4a32')) {function content_4ede1cc5e4a32($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../partials/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='admin_sub_bttn'>
  <a href="/admin/director/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_directors']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

  <table id='all_directors' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Фамилия</td>
        <td>Имя</td>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['one_director'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_director']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_directors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_director']->key => $_smarty_tpl->tpl_vars['one_director']->value){
$_smarty_tpl->tpl_vars['one_director']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['one_director']->value['producer_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_director']->value['first_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_director']->value['last_name'];?>
</td>
        <td class="act">
          <a href="/admin/director/delete/id/<?php echo $_smarty_tpl->tpl_vars['one_director']->value['producer_id'];?>
"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_directors']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

</div><?php }} ?>