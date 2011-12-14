{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/genre/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_genres,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_genres' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=genres from=$all_genres item=one_genre}
      <tr>
        <td>{$one_genre['genre_id']}</td>
        <td>{$one_genre['name']}</td>
        <td class="act">{*
          <a href="/admin/genre/edit/id/{$one_genre['genre_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          *}
          <a href="/admin/genre/delete/id/{$one_genre['genre_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_genres,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>