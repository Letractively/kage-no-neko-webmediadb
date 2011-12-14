{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/user/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_users,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_users' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Логин</td>
        <td>Ф.И.</td>
        <td>Группа</td>
        <td>Дата регистрации</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=users from=$all_users item=one_user}
      <tr>
        <td>{$one_user['user_id']}</td>
        <td>{$one_user['nickname']}</td>
        <td>{$one_user['user_first_name']} {$one_user['user_last_name']}</td>
        <td>{$one_user['group']}</td>
        <td>{$one_user['reg_date']}</td>
        <td class="act">
        {if $one_user['user_id'] != $currentUser['user_id']}
          {*<a href="/admin/user/edit/id/{$one_user['user_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          <a href="/admin/user/delete/id/{$one_user['user_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
          *}
        {/if}
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_users,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>