<?php /* Smarty version Smarty 3.1.4, created on 2011-12-07 18:59:57
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\movie\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296344edf8d4370e7f5-56858076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8635a5e4db87ff84d5271f2299f1606dcf504fd6' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\movie\\index.tpl',
      1 => 1323276646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296344edf8d4370e7f5-56858076',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edf8d438db0e',
  'variables' => 
  array (
    'all_movies' => 0,
    'paginatorParam' => 0,
    'this' => 0,
    'one_movie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edf8d438db0e')) {function content_4edf8d438db0e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../partials/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='admin_sub_bttn'>
  <a href="/admin/movie/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_movies']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

  <table id='all_movies' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
        <td>Оригинальное</td>
        <td>Год</td>
        <td>Длина(мин)</td>
        <td>Мульт</td>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['one_movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_movie']->key => $_smarty_tpl->tpl_vars['one_movie']->value){
$_smarty_tpl->tpl_vars['one_movie']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['one_movie']->value['film_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_movie']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_movie']->value['original_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_movie']->value['year'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_movie']->value['length'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['one_movie']->value['cartoon']=='yes'){?>+<?php }?></td>
        <td class="act">
          <a href="/admin/movie/edit/id/<?php echo $_smarty_tpl->tpl_vars['one_movie']->value['film_id'];?>
"><img title="Редактировать" src="/resources/edit.png"/></a>
          <a href="/admin/movie/delete/id/<?php echo $_smarty_tpl->tpl_vars['one_movie']->value['film_id'];?>
"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_movies']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

</div><?php }} ?>