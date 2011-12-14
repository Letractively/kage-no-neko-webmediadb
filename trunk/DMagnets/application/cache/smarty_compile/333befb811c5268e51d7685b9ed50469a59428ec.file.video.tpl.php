<?php /* Smarty version Smarty 3.1.4, created on 2011-12-14 00:22:03
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\partials\video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88214edfd4a46140e5-65142481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '333befb811c5268e51d7685b9ed50469a59428ec' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\partials\\video.tpl',
      1 => 1323814919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88214edfd4a46140e5-65142481',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4edfd4a481ab0',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4edfd4a481ab0')) {function content_4edfd4a481ab0($_smarty_tpl) {?><form id='<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getName();?>
' enctype="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getEnctype();?>
" method="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getMethod();?>
" action="<?php echo $_smarty_tpl->tpl_vars['this']->value->element->getAction();?>
">
  <table id='form_tab'>
    <tr>
      <td colspan="2" style="border-bottom: 2px solid rgb(202,81,10);">
        <h2>Добавить <?php if ($_smarty_tpl->tpl_vars['this']->value->element->getName()=='movie'){?>фильм<?php }else{ ?>сериал<?php }?></h2>
      </td>
    </tr>
    <tr><td id='space' colspan="2"></td></tr>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->cartoon;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->name;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->original_name;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->year;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->about;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->length;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->poster;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->magnet;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->actors;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->directors;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->countries;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->genres;?>

    <tr><td id='space' colspan="2"></td></tr>
    <tr><td id='space' colspan="2"></td></tr>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->cencel;?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->element->submit;?>

  </table>
</form><?php }} ?>