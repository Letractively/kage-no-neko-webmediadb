{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/country/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_countries,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_countries' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=countries from=$all_countries item=one_country}
      <tr>
        <td>{$one_country['country_id']}</td>
        <td>{$one_country['name']}</td>
        <td class="act">{*
          <a href="/admin/country/edit/id/{$one_country['country_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          *}
          <a href="/admin/country/delete/id/{$one_country['country_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_countries,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>