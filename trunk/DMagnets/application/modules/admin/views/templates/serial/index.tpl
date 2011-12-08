{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/serial/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_serials,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_serials' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
        <td>Оригинальное</td>
        <td>Года</td>
        <td>Длина(сез)</td>
        <td>Мульт</td>
        {*<td>Ф-л(ы)</td>*}
      </tr>
    </thead>
    <tbody>
    {foreach name=serials from=$all_serials item=one_serial}
      <tr>
        <td>{$one_serial['film_id']}</td>
        <td>{$one_serial['name']}</td>
        <td>{$one_serial['original_name']}</td>
        <td>{$one_serial['year_start']}-{if $one_serial['year_end'] == 'no'}...{else}{$one_serial['year_end']}{/if}</td>
        <td>{$one_serial['seasons_num']}</td>
        <td>{if $one_serial['cartoon'] == 'yes'}+{/if}</td>
        <td class="act">
          <a href="/admin/serial/edit/id/{$one_serial['film_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          <a href="/admin/serial/delete/id/{$one_serial['film_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_serials,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>