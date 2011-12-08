{if $this->pageCount }
<div class="paginating_control">
  {if isset($this->previous)}
  <a href="{$this->urlPart}/page/{$this->previous}">&lt; Previous</a> |
  {else}
  <span class="disabled">&lt; Previous</span> |
  {/if}
  {foreach from=$this->pagesInRange item=page}
    {if $page != $this->current}
    <a href="{$this->urlPart}/page/{$page}">{$page}</a> |
    {else}
      {$page} |
    {/if}
  {/foreach}
  {if isset($this->next)}
  <a href="{$this->urlPart}/page/{$this->next}">Next &gt;</a>
  {else}
  <span class="disabled">Next &gt;</span>
  {/if}
</div>
{/if}