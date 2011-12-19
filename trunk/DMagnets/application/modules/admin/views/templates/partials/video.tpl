<form id='{$this->element->getName()}' enctype="{$this->element->getEnctype()}" method="{$this->element->getMethod()}" action="{$this->element->getAction()}">
  <table id='form_tab'>
    <tr>
      <td colspan="2" style="border-bottom: 2px solid rgb(202,81,10);">
        <h2>Добавить {if $this->element->getName() == 'movie'}фильм{else}сериал{/if}</h2>
      </td>
    </tr>
    <tr><td id='space' colspan="2"></td></tr>
    {$this->element->cartoon}
    {$this->element->name}
    {$this->element->original_name}
    {$this->element->year}
    {if isset($this->element->year_end)}
    	{$this->element->year_end}
    {/if}
    {$this->element->about}
    {if isset($this->element->length)}
	    {$this->element->length}
	{/if}
    {$this->element->poster}
    {if isset($this->element->magnet)}
    	{$this->element->magnet}
    {/if}
    {$this->element->actors}
    {$this->element->directors}
    {$this->element->countries}
    {$this->element->genres}
    <tr><td id='space' colspan="2"></td></tr>
    <tr><td id='space' colspan="2"></td></tr>
    {$this->element->cencel}
    {$this->element->submit}
  </table>
</form>