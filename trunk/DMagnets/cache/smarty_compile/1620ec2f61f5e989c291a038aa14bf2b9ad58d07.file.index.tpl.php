<?php /* Smarty version Smarty 3.1.4, created on 2011-12-07 18:58:43
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\serial\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237894edf9a136f9cb0-72982685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1620ec2f61f5e989c291a038aa14bf2b9ad58d07' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\serial\\index.tpl',
      1 => 1323277111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237894edf9a136f9cb0-72982685',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edf9a1388a26',
  'variables' => 
  array (
    'all_serials' => 0,
    'paginatorParam' => 0,
    'this' => 0,
    'one_serial' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edf9a1388a26')) {function content_4edf9a1388a26($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../partials/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='admin_sub_bttn'>
  <a href="/admin/serial/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_serials']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

  <table id='all_serials' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
        <td>Оригинальное</td>
        <td>Года</td>
        <td>Длина(сез)</td>
        <td>Мульт</td>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['one_serial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_serial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_serials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_serial']->key => $_smarty_tpl->tpl_vars['one_serial']->value){
$_smarty_tpl->tpl_vars['one_serial']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['one_serial']->value['film_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_serial']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_serial']->value['original_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_serial']->value['year_start'];?>
-<?php if ($_smarty_tpl->tpl_vars['one_serial']->value['year_end']=='no'){?>...<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['one_serial']->value['year_end'];?>
<?php }?></td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_serial']->value['seasons_num'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['one_serial']->value['cartoon']=='yes'){?>+<?php }?></td>
        <td class="act">
          <a href="/admin/serial/edit/id/<?php echo $_smarty_tpl->tpl_vars['one_serial']->value['film_id'];?>
"><img title="Редактировать" src="/resources/edit.png"/></a>
          <a href="/admin/serial/delete/id/<?php echo $_smarty_tpl->tpl_vars['one_serial']->value['film_id'];?>
"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_serials']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

</div><?php }} ?>