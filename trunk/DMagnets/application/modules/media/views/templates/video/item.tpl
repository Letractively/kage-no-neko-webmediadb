        <table id='item_info'>
          <tr>
            <td class='title' colspan="2">
              <h1 style="color: rgb(202,81,10);">{$item['info']['name']}</h1>
              <h3>{$item['info']['original_name']}</h3></td>
            <td id='thrd_col' rowspan="2">
              <span style="padding-right: 5px; color: rgb(202,81,10);">В ролях:</span>
              <div id='actr_lst' >
              {foreach name=actors from=$item['actor_info'] item=one_actor}
                <span>{$one_actor['first_name']} {$one_actor['last_name']}</span>
              {/foreach}
              </div>
            </td>
          </tr>
          <tr>
            <td id='fst_col'>
              <img style="border: 1px solid rgb(202,81,10);" alt="{$item['info']['name']}" src="/resources/posters/{$item['info']['poster']}">
            </td>
            <td id='scnd_col'>
              <table>
                <tr id="year">
                  <td>Год</td>
                  <td style="padding-right: 5px;">
                  {strip}
                    {if $item['info']['serial'] == 'yes'}
                      {$item['more_info']['year_start']}
                      -
                      {if $item['more_info']['year_end'] == 'no'}
                        ...
                      {else}
                        {$item['more_info']['year_end']}
                      {/if}
                    {else}
                      {$item['more_info']['year']}
                    {/if}
                  {strip}
                  </td>
                </tr>
                <tr id="cntry">
                  <td>Страна</td>
                  <td style="padding-right: 5px;">
                  {strip}
                  {foreach name=countries from=$item['country_info'] item=one_country}
                    {if $smarty.foreach.countries.iteration != 1}
                      {", "}
                    {/if}
                    {$one_country['name']}
                  {/foreach}
                  {/strip}
                  </td>
                </tr>
                <tr id="genre">
                  <td>Жанр</td>
                  <td style="padding-right: 5px;">
                  {strip}
                  {foreach name=genres from=$item['genre_info'] item=one_genre}
                    {if $smarty.foreach.genres.iteration != 1}
                      {", "}
                    {/if}
                    {$one_genre['name']}
                  {/foreach}
                  {/strip}
                  </td>
                </tr>
                <tr id="producer">
                  <td>Режиссер</td>
                  <td style="padding-right: 5px;">
                  {strip}
                  {foreach name=directors from=$item['director_info'] item=one_director}
                    {if $smarty.foreach.directors.iteration != 1}
                      {", "}
                    {/if}
                    {$one_director['first_name']} {$one_director['last_name']}
                  {/foreach}                
                  {/strip}
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td id='about' colspan="3"><p>{$item['info']['about']}</p></td>
          </tr>
          <tr>
            <td id='links' colspan="3">
              <h3>Скачать:</h3>
              <ul>
              {if $item['info']['serial'] == 'no'}
                <li><a href="{$item['file_info']['file_link']}">{$item['file_info']['file_name']}</a></li>
              {else}
                {foreach name=seasons from=$item['season_info'] item=one_season}
                <li>сезон {$one_season['season_num']}{if $one_season['season_name'] != ''}: {$one_season['season_name']}{/if}</li>
                <li>
                  <ul>
                    {foreach name=episods from=$item['episode_info'][$smarty.foreach.seasons.iteration-1] item=one_episode}
                    <li>
                      <a href="{$item['file_info'][$smarty.foreach.seasons.iteration-1][$smarty.foreach.episods.iteration-1]['file_link']}">серия {$one_episode['episod_num']}{if $one_episode['episode_name'] != ''}: {$one_episode['episode_name']}{/if}</a>
                    </li>
                    {/foreach}
                  </ul>
                </li>
                {/foreach}
              {/if}
              </ul>
            </td>
          </tr>
          <tr>
            <td style="padding: 5px; border: 1px solid rgb(202,81,10); background-color: rgba(0,0,0,0.5);" colspan="3">
            {if $comment_flag}
                <h3 style="color: rgb(202,81,10);border-bottom: 1px solid rgb(202,81,10);">Комментарии пользователей</h3>
                {foreach name=comments from=$item['comment_info']['comment'] item=one_comment}
                <div class="user_comment">
                  <div class="avatar_small">
                    <img src="/resources/avatars/{$item['comment_info']['user'][$smarty.foreach.comments.iteration-1]['avatar']}"/><img style="margin-top: -2px;" src="/resources/{$item['comment_info']['user'][$smarty.foreach.comments.iteration-1]['group']}.png"/>
                  </div>
                  <div class="comment_body">
                    <h4 style="border-bottom: 1px solid rgb(202,81,10);">{$item['comment_info']['user'][$smarty.foreach.comments.iteration-1]['nickname']}</h4>
                    <p style="margin: 5px;">{$one_comment['comment_txt']}</p>
                  </div>
                  <div class="bottom_bar">
                    <a href="/profile/show/id/{$item['comment_info']['user'][$smarty.foreach.comments.iteration-1]['user_id']}"><img title="Профиль" style="width: 20px; margin: 0 5px 0 0;" src="/resources/profile.png"/></a>
                    <img id='write_mail' title="Написать сообщение" style="width: 20px; margin: 0 5px 0 0;" src="/resources/mail.png"/>
                  </div>
                </div>
                {/foreach}
                <div id='new_comm'>
                  <h3 style="color: rgb(202,81,10);margin-bottom: 5px; border-top: 1px solid rgb(202,81,10);">Добавить комментарий</h3>
                  <form method="post" action="">
                    <textarea name="write_comm" rows="5" cols="80" style="width: 100%;"></textarea>
                  </form>
                </div>
            {else}
              <h3 style="color: rgb(202,81,10);border-bottom: 1px solid rgb(202,81,10);">Комментарии отключены</h3>
            {/if}
            </td>
          </tr>
        </table>