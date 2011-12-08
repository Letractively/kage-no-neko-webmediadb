<?php /* Smarty version Smarty 3.1.4, created on 2011-12-07 15:02:45
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\video\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254754edb9d86c65e69-17421506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d87e561b5dbcdbf76b7aebbd211c66910dc07b5' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\video\\index.tpl',
      1 => 1323262918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254754edb9d86c65e69-17421506',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edb9d86d8121',
  'variables' => 
  array (
    'all_video' => 0,
    'paginatorParam' => 0,
    'this' => 0,
    'one_video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edb9d86d8121')) {function content_4edb9d86d8121($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../partials/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='admin_sub_bttn'>
  <a href="/admin/video/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_video']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

  <table id='all_video' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Тип</td>
        <td>Название</td>
        <td>Оригинальное</td>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['one_video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_video']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_video']->key => $_smarty_tpl->tpl_vars['one_video']->value){
$_smarty_tpl->tpl_vars['one_video']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['one_video']->value['film_id'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['one_video']->value['serial']=='yes'){?><?php if ($_smarty_tpl->tpl_vars['one_video']->value['cartoon']=='yes'){?>мульт<?php }?>сериал<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['one_video']->value['cartoon']=='yes'){?>мульт<?php }?>фильм<?php }?></td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_video']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_video']->value['original_name'];?>
</td>
        <td class="act">
          <a href="/admin/video/edit/id/<?php echo $_smarty_tpl->tpl_vars['one_video']->value['film_id'];?>
"><img title="Редактировать" src="/resources/edit.png"/></a>
          <a href="/admin/video/delete/id/<?php echo $_smarty_tpl->tpl_vars['one_video']->value['film_id'];?>
"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_video']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

</div><?php }} ?>