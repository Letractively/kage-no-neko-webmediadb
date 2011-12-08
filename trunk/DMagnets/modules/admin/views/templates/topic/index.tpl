{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/video/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_topics,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_topics' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
        <td>Раздел</td>
        <td>Кол-во сообщений</td>
        <td>Создал</td>
      </tr>
    </thead>
    <tbody>
    {foreach name=topics from=$all_topics item=one_topic}
      <tr>
        <td>{$one_topic['topic_id']}</td>
        <td>{$one_topic['topic_name']}</td>
        <td>{$one_topic['section_id']}</td>
        <td>{$one_topic['post_num']}</td>
        <td>{$one_topic['user_id']}</td>
        <td class="act">
          <a href="/admin/video/edit/id/{$one_video['film_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          <a href="/admin/video/delete/id/{$one_video['film_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_topics,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>