<?php /* Smarty version Smarty 3.1.4, created on 2011-12-07 15:04:58
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\topic\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141524ede2d6ee142c2-13840236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d3c5c51ada353747989d0528319abe4b3765bf' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\topic\\index.tpl',
      1 => 1323263078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141524ede2d6ee142c2-13840236',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ede2d6ef1c76',
  'variables' => 
  array (
    'all_topics' => 0,
    'paginatorParam' => 0,
    'this' => 0,
    'one_topic' => 0,
    'one_video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ede2d6ef1c76')) {function content_4ede2d6ef1c76($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../partials/admin_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='admin_sub_bttn'>
  <a href="/admin/video/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_topics']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

  <table id='all_topics' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
        <td>Раздел</td>
        <td>Кол-во сообщений</td>
        <td>Создал</td>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['one_topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_topic']->key => $_smarty_tpl->tpl_vars['one_topic']->value){
$_smarty_tpl->tpl_vars['one_topic']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['one_topic']->value['topic_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_topic']->value['topic_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_topic']->value['section_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_topic']->value['post_num'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['one_topic']->value['user_id'];?>
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
<?php echo $_smarty_tpl->tpl_vars['this']->value->paginationControl($_smarty_tpl->tpl_vars['all_topics']->value,'Sliding','partials/paginator_control.tpl',$_smarty_tpl->tpl_vars['paginatorParam']->value);?>

</div><?php }} ?>