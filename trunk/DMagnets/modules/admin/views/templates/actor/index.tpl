{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/actor/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_actors,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_actors' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Фамилия</td>
        <td>Имя</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=actors from=$all_actors item=one_actor}
      <tr>
        <td>{$one_actor['actor_id']}</td>
        <td>{$one_actor['first_name']}</td>
        <td>{$one_actor['last_name']}</td>
        <td class="act">{*
          <a href="/admin/actor/edit/id/{$one_actor['actor_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          *}
          <a href="/admin/actor/delete/id/{$one_actor['actor_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_actors,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>