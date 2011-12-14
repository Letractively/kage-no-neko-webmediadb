{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/director/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_directors,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_directors' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Фамилия</td>
        <td>Имя</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=directors from=$all_directors item=one_director}
      <tr>
        <td>{$one_director['producer_id']}</td>
        <td>{$one_director['first_name']}</td>
        <td>{$one_director['last_name']}</td>
        <td class="act">{*
          <a href="/admin/director/edit/id/{$one_director['producer_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          *}
          <a href="/admin/director/delete/id/{$one_director['producer_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_directors,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>