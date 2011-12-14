{$this->paginationControl($paginator,'Sliding','partials/paginator_control.tpl')}
<table id='video_list'>
  <tr>
{foreach name=list from=$paginator item=record}
    <td>
      <a href="/media/video/item/id/{$record['film_id']}"><img alt="{$record['name']}" title="{$record['name']}" src="/resources/posters/{$record['poster']}"></a>
      <h3><a href="/media/video/item/id/{$record['film_id']}">{$record['name']}{if $record['original_name'] != ""} / {$record['original_name']}{/if}</a></h3>
    </td>
  {if $smarty.foreach.list.iteration == $total and $total is not div by 5}
    {section name=for loop=$none_col}
    <td class='none'></td>
    {/section}
  {/if}
  {if $smarty.foreach.list.iteration != $total and $smarty.foreach.list.iteration is div by 5}
  </tr>
  <tr>
  {/if}
{/foreach}
  </tr>
</table>
{$this->paginationControl($paginator,'Sliding','partials/paginator_control.tpl')}