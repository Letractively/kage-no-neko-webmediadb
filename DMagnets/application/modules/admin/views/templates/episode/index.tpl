{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/episode/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_episodes,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_episodes' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td style="display: none;">SeasonID</td>
        <td>ID</td>
        <td>Номер</td>
        <td>Имя</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=episodes from=$all_episodes item=one_episode}
      <tr>
        <td style="display: none;">{$one_episode['season_id']}</td>
        <td>{$one_episode['episode_id']}</td>
        <td>{$one_episode['episod_num']}</td>
        <td>{$one_episode['episode_name']}</td>
        <td class="act">{*
          <a href="/admin/episode/edit/id/{$one_episode['episode_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          *}
          <a href="/admin/episode/delete/id/{$one_episode['episode_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_episodes,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>