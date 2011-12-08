{include file="../partials/admin_menu.tpl"}
<div id='admin_sub_bttn'>
  <a href="/admin/movie/add"><img title="Добавить" src="/resources/add.png"/></a>
  <!-- <img class="al_edit" title="Редактировать отмеченые" src="/resources/edit.png"/> -->
  <!-- <img class="al_delete" title="Удалить отмеченые" src="/resources/delete.png"/> -->
</div>
<div id='admin_content' style="margin: 0px 10px 10px 10px;">
{$this->paginationControl($all_movies,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
  <table id='all_movies' class="sort" style="border-spacing: 5px;width: 775px;font-size: 12px;text-align: left;">
    <thead>
      <tr>
        <td>ID</td>
        <td>Название</td>
        <td>Оригинальное</td>
        <td>Год</td>
        <td>Длина(мин)</td>
        <td>Мульт</td>
        {*<td>Ф-л(ы)</td>*}
      </tr>
    </thead>
    <tbody>
    {foreach name=movies from=$all_movies item=one_movie}
      <tr>
        <td>{$one_movie['film_id']}</td>
        <td>{$one_movie['name']}</td>
        <td>{$one_movie['original_name']}</td>
        <td>{$one_movie['year']}</td>
        <td>{$one_movie['length']}</td>
        <td>{if $one_movie['cartoon'] == 'yes'}+{/if}</td>
        <td class="act">
          <a href="/admin/movie/edit/id/{$one_movie['film_id']}"><img title="Редактировать" src="/resources/edit.png"/></a>
          <a href="/admin/movie/delete/id/{$one_movie['film_id']}"><img title="Удалить" src="/resources/delete.png"/></a>
        </td>
      </tr>
    {/foreach}
    </tbody>
  </table>
{$this->paginationControl($all_movies,'Sliding','partials/paginator_control.tpl',$paginatorParam)}
</div>