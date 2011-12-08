<?php /* Smarty version Smarty 3.1.4, created on 2011-12-03 18:30:31
         compiled from "C:\Server\DMagnets\application\modules\media\views\templates\video\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198854eda4ea7250508-83932511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca2acc04d3d06aaf5e73b85b5b6e2c1c13973be' => 
    array (
      0 => 'C:\\Server\\DMagnets\\application\\modules\\media\\views\\templates\\video\\item.tpl',
      1 => 1322077624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198854eda4ea7250508-83932511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'one_actor' => 0,
    'one_country' => 0,
    'one_genre' => 0,
    'one_director' => 0,
    'one_season' => 0,
    'one_episode' => 0,
    'comment_flag' => 0,
    'one_comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4eda4ea76f9c5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eda4ea76f9c5')) {function content_4eda4ea76f9c5($_smarty_tpl) {?>        <table id='item_info'>
          <tr>
            <td class='title' colspan="2">
              <h1 style="color: rgb(202,81,10);"><?php echo $_smarty_tpl->tpl_vars['item']->value['info']['name'];?>
</h1>
              <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['info']['original_name'];?>
</h3></td>
            <td id='thrd_col' rowspan="2">
              <span style="padding-right: 5px; color: rgb(202,81,10);">В ролях:</span>
              <div id='actr_lst' >
              <?php  $_smarty_tpl->tpl_vars['one_actor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_actor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['actor_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_actor']->key => $_smarty_tpl->tpl_vars['one_actor']->value){
$_smarty_tpl->tpl_vars['one_actor']->_loop = true;
?>
                <span><?php echo $_smarty_tpl->tpl_vars['one_actor']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['one_actor']->value['last_name'];?>
</span>
              <?php } ?>
              </div>
            </td>
          </tr>
          <tr>
            <td id='fst_col'>
              <img style="border: 1px solid rgb(202,81,10);" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['info']['name'];?>
" src="/resources/posters/<?php echo $_smarty_tpl->tpl_vars['item']->value['info']['poster'];?>
">
            </td>
            <td id='scnd_col'>
              <table>
                <tr id="year">
                  <td>Год</td>
                  <td style="padding-right: 5px;">
                  <?php if ($_smarty_tpl->tpl_vars['item']->value['info']['serial']=='yes'){?><?php echo $_smarty_tpl->tpl_vars['item']->value['more_info']['year_start'];?>
-<?php if ($_smarty_tpl->tpl_vars['item']->value['more_info']['year_end']=='no'){?>...<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['more_info']['year_end'];?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['more_info']['year'];?>
<?php }?></td></tr><tr id="cntry"><td>Страна</td><td style="padding-right: 5px;"><?php  $_smarty_tpl->tpl_vars['one_country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['country_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['countries']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_country']->key => $_smarty_tpl->tpl_vars['one_country']->value){
$_smarty_tpl->tpl_vars['one_country']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['countries']['iteration']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['countries']['iteration']!=1){?><?php echo ", ";?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['one_country']->value['name'];?>
<?php } ?>
                  </td>
                </tr>
                <tr id="genre">
                  <td>Жанр</td>
                  <td style="padding-right: 5px;">
                  <?php  $_smarty_tpl->tpl_vars['one_genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_genre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['genre_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['genres']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_genre']->key => $_smarty_tpl->tpl_vars['one_genre']->value){
$_smarty_tpl->tpl_vars['one_genre']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['genres']['iteration']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['genres']['iteration']!=1){?><?php echo ", ";?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['one_genre']->value['name'];?>
<?php } ?>
                  </td>
                </tr>
                <tr id="producer">
                  <td>Режиссер</td>
                  <td style="padding-right: 5px;">
                  <?php  $_smarty_tpl->tpl_vars['one_director'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_director']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['director_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['directors']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_director']->key => $_smarty_tpl->tpl_vars['one_director']->value){
$_smarty_tpl->tpl_vars['one_director']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['directors']['iteration']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['directors']['iteration']!=1){?><?php echo ", ";?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['one_director']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['one_director']->value['last_name'];?>
<?php } ?>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td id='about' colspan="3"><p><?php echo $_smarty_tpl->tpl_vars['item']->value['info']['about'];?>
</p></td>
          </tr>
          <tr>
            <td id='links' colspan="3">
              <h3>Скачать:</h3>
              <ul>
              <?php if ($_smarty_tpl->tpl_vars['item']->value['info']['serial']=='no'){?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['file_info']['file_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['file_info']['file_name'];?>
</a></li>
              <?php }else{ ?>
                <?php  $_smarty_tpl->tpl_vars['one_season'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_season']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['season_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['seasons']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_season']->key => $_smarty_tpl->tpl_vars['one_season']->value){
$_smarty_tpl->tpl_vars['one_season']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['seasons']['iteration']++;
?>
                <li>сезон <?php echo $_smarty_tpl->tpl_vars['one_season']->value['season_num'];?>
<?php if ($_smarty_tpl->tpl_vars['one_season']->value['season_name']!=''){?>: <?php echo $_smarty_tpl->tpl_vars['one_season']->value['season_name'];?>
<?php }?></li>
                <li>
                  <ul>
                    <?php  $_smarty_tpl->tpl_vars['one_episode'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_episode']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['episode_info'][$_smarty_tpl->getVariable('smarty')->value['foreach']['seasons']['iteration']-1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['episods']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_episode']->key => $_smarty_tpl->tpl_vars['one_episode']->value){
$_smarty_tpl->tpl_vars['one_episode']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['episods']['iteration']++;
?>
                    <li>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['file_info'][$_smarty_tpl->getVariable('smarty')->value['foreach']['seasons']['iteration']-1][$_smarty_tpl->getVariable('smarty')->value['foreach']['episods']['iteration']-1]['file_link'];?>
">серия <?php echo $_smarty_tpl->tpl_vars['one_episode']->value['episod_num'];?>
<?php if ($_smarty_tpl->tpl_vars['one_episode']->value['episode_name']!=''){?>: <?php echo $_smarty_tpl->tpl_vars['one_episode']->value['episode_name'];?>
<?php }?></a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
              <?php }?>
              </ul>
            </td>
          </tr>
          <tr>
            <td style="padding: 5px; border: 1px solid rgb(202,81,10); background-color: rgba(0,0,0,0.5);" colspan="3">
            <?php if ($_smarty_tpl->tpl_vars['comment_flag']->value){?>
                <h3 style="color: rgb(202,81,10);border-bottom: 1px solid rgb(202,81,10);">Комментарии пользователей</h3>
                <?php  $_smarty_tpl->tpl_vars['one_comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['comment_info']['comment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['comments']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_comment']->key => $_smarty_tpl->tpl_vars['one_comment']->value){
$_smarty_tpl->tpl_vars['one_comment']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['comments']['iteration']++;
?>
                <div class="user_comment">
                  <div class="avatar_small">
                    <img src="/resources/avatars/<?php echo $_smarty_tpl->tpl_vars['item']->value['comment_info']['user'][$_smarty_tpl->getVariable('smarty')->value['foreach']['comments']['iteration']-1]['avatar'];?>
"/><img style="margin-top: -2px;" src="/resources/<?php echo $_smarty_tpl->tpl_vars['item']->value['comment_info']['user'][$_smarty_tpl->getVariable('smarty')->value['foreach']['comments']['iteration']-1]['group'];?>
.png"/>
                  </div>
                  <div class="comment_body">
                    <h4 style="border-bottom: 1px solid rgb(202,81,10);"><?php echo $_smarty_tpl->tpl_vars['item']->value['comment_info']['user'][$_smarty_tpl->getVariable('smarty')->value['foreach']['comments']['iteration']-1]['nickname'];?>
</h4>
                    <p style="margin: 5px;"><?php echo $_smarty_tpl->tpl_vars['one_comment']->value['comment_txt'];?>
</p>
                  </div>
                  <div class="bottom_bar">
                    <a href="/profile/show/id/<?php echo $_smarty_tpl->tpl_vars['item']->value['comment_info']['user'][$_smarty_tpl->getVariable('smarty')->value['foreach']['comments']['iteration']-1]['user_id'];?>
"><img title="Профиль" style="width: 20px; margin: 0 5px 0 0;" src="/resources/profile.png"/></a>
                    <img id='write_mail' title="Написать сообщение" style="width: 20px; margin: 0 5px 0 0;" src="/resources/mail.png"/>
                  </div>
                </div>
                <?php } ?>
                <div id='new_comm'>
                  <h3 style="color: rgb(202,81,10);margin-bottom: 5px; border-top: 1px solid rgb(202,81,10);">Добавить комментарий</h3>
                  <form method="post" action="">
                    <textarea name="write_comm" rows="5" cols="80" style="width: 100%;"></textarea>
                  </form>
                </div>
            <?php }else{ ?>
              <h3 style="color: rgb(202,81,10);border-bottom: 1px solid rgb(202,81,10);">Комментарии отключены</h3>
            <?php }?>
            </td>
          </tr>
        </table><?php }} ?>