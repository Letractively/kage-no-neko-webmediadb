<?php /* Smarty version Smarty 3.1.4, created on 2011-12-04 15:32:26
         compiled from "C:\Server\DMagnets\application\modules\admin\views\templates\partials\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308374ed4e6be1dd964-59054992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cff7c2a5021e3bbd1d01b48870d1f223712ef8a' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\admin\\views\\templates\\partials\\sidebar.tpl',
      1 => 1323001095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308374ed4e6be1dd964-59054992',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ed4e6be309bd',
  'variables' => 
  array (
    'userRole' => 0,
    'authForm' => 0,
    'currentUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed4e6be309bd')) {function content_4ed4e6be309bd($_smarty_tpl) {?><!-- ******************************* Sidebar ******************************* -->
      <div id='sidebar'>
        <?php if ($_smarty_tpl->tpl_vars['userRole']->value=='guest'){?>
        <div class='block' id='auth_form'>
          <div id='title'>
            <h3>Форма входа</h3>
          </div>
          <hr>
          <div id='auth_err'>
            <img src="/resources/loader.gif">
          </div>
          <div id='blk-cntnt'>
			<?php echo $_smarty_tpl->tpl_vars['authForm']->value;?>

          </div>
        </div>
        <?php }else{ ?>
        <div class='block' id='userbar'>
          <div id='title'>
            <h3><?php echo $_smarty_tpl->tpl_vars['currentUser']->value['nickname'];?>
</h3>
          </div>
          <hr>
          <div id='blk-cntnt'>
            <div id='prof_bttn'>
              <a href="/profile"><img title="Профиль" src="/resources/profile.png"/></a>
              <?php if ($_smarty_tpl->tpl_vars['currentUser']->value['group']=='Administrator'){?>
              <a href="/admin"><img title="Управление" src="/resources/admin.png"/></a>
              <?php }?>
              <a href="/auth/logout"><img title="Выход" src="/resources/logout.png"/></a>
            </div>
            <div id='avatar'>
              <img src="/resources/avatars/<?php echo $_smarty_tpl->tpl_vars['currentUser']->value['avatar'];?>
"/><img style="margin-top: -4px;" src="/resources/<?php echo $_smarty_tpl->tpl_vars['currentUser']->value['group'];?>
.png"/>
            </div>
            <div id='user_info' style="clear: both;">
            </div>
          </div>
        </div>
        <?php }?>
        <div class='block' id='sts_lnks'>
          <div id='title'>
            <h3>Ссылки</h3>
          </div>
          <hr>
          <div id='blk-cntnt'>
            <p><a href="http://komsomolske.net">Форум ТК СКТ "Диалог"</a></p>
            <p><a href="http://komsomolske.net/forum/13">Форум D Magnets</a></p>
            <p><a href="http://www.kinopoisk.ru">Кинопоиск</a></p>
            <p><a href="http://www.ex.ua">EX.ua</a></p>
            <p><a href="http://rutracker.org/forum/index.php">RuTracker</a></p>
          </div>
        </div>
      </div><?php }} ?>