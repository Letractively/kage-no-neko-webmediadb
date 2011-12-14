{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/video/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_sections,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_sections' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
        <td>Кол-во тем</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=sections from=$all_sections item=one_section}
      <tr>
        <td>{$one_section['section_id']}</td>
        <td>{$one_section['section_name']}</td>
        <td>{$one_section['topic_num']}</td>
        <td class="act">
          <a href="/admin/video/edit/id/{$one_video['film_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          <a href="/admin/video/delete/id/{$one_video['film_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_sections,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>