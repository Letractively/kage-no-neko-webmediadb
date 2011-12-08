<?php /* Smarty version Smarty 3.1.4, created on 2011-12-07 15:02:53
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\genre\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3774ede1fa298ecb2-73191108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa713d65454e1334f01339a7f74610462d189461' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\genre\\index.tpl',
      1 => 1323262938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3774ede1fa298ecb2-73191108',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ede1fa2af8c4',
  'variables' => 
  array (
    'all_genres' => 0,
    'paginatorParam' => 0,
    'this' => 0,
    'one_genre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ede1fa2af8c4')) {function content_4ede1fa2af8c4($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../partials/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='admin_sub_bttn'>
  <a href="/admin/genre/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_genres']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

  <table id='all_genres' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['one_genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_genre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_genres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_genre']->key => $_smarty_tpl->tpl_vars['one_genre']->value){
$_smarty_tpl->tpl_vars['one_genre']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['one_genre']->value['genre_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_genre']->value['name'];?>
</td>
        <td class="act">
          <a href="/admin/genre/delete/id/<?php echo $_smarty_tpl->tpl_vars['one_genre']->value['genre_id'];?>
"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_genres']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

</div><?php }} ?>