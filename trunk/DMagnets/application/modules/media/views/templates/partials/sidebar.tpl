<!-- ******************************* Sidebar ******************************* -->
      <div id='sidebar'>
        {if $userRole == 'guest'}
        <div class='block' id='auth_form'>
          <div id='title'>
            <h3>Форма входа</h3>
          </div>
          <hr>
          <div id='auth_err'>
            <img src="/resources/loader.gif">
          </div>
          <div id='blk-cntnt'>
			{$authForm}
          </div>
        </div>
        {else}
        <div class='block' id='userbar'>
          <div id='title'>
            <h3>{$currentUser['nickname']}</h3>
          </div>
          <hr>
          <div id='blk-cntnt'>
            <div id='prof_bttn'>
              <a href="/profile"><img title="Профиль" src="/resources/profile.png"/></a>
              {if $currentUser['group'] == 'Administrator'}
              <a href="/admin"><img title="Управление" src="/resources/admin.png"/></a>
              {/if}
              <a href="/auth/logout"><img title="Выход" src="/resources/logout.png"/></a>
            </div>
            <div id='avatar'>
              <img src="/resources/avatars/{$currentUser['avatar']}"/><img style="margin-top: -4px;" src="/resources/{$currentUser['group']}.png"/>
            </div>
            <div id='user_info' style="clear: both;">
            </div>
          </div>
        </div>
        {*
        <div class='block' id='whoonline'>
          <div id='title'>
            <h3>������������ ������</h3>
          </div>
          <hr>
          <div id='blk-cntnt'>
            {foreach name=onln from=$online_list item=online_one}
            <a href="http://{$domain_name}?cmd=show&obj=profile&itm={$online_one}">{$online_one}</a>
            {if !$smarty.foreach.onln.last}, {/if}
            {/foreach}
          </div>
        </div>
        *}
        {/if}
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
      </div>