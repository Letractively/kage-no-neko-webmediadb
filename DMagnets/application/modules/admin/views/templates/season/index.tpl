{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/season/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_seasons,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_seasons' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td style="display: none;">SerialID</td>
        <td>ID</td>
        <td>Номер</td>
        <td>Имя</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=seasons from=$all_seasons item=one_season}
      <tr>
        <td style="display: none;">{$one_season['item_id']}</td>
        <td>{$one_season['season_id']}</td>
        <td>{$one_season['season_num']}</td>
        <td><a href="/admin/episode/index/season/{$one_season['season_id']}" title="Показать эпизоды">{$one_season['season_name']}</a></td>
        <td class="act">{*
          <a href="/admin/season/edit/id/{$one_season['season_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          *}
          <a href="/admin/season/delete/id/{$one_season['season_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_seasons,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>