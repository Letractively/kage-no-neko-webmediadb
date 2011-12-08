<form id='{$this->element->getName()}' method="{$this->element->getMethod()}" action="{$this->element->getAction()}">
  <table id='form_tab'>
    <tr>
      <td colspan="2" style="border-bottom: 2px solid rgb(202,81,10);">
        <h2>Добавить {if $this->element->getName() == 'actor'}актера{else}режиссера{/if}</h2>
      </td>
    </tr>
    <tr><td id='space' colspan="2"></td></tr>
    {$this->element->first_name}
    {$this->element->last_name}
    <tr><td id='space' colspan="2"></td></tr>
    <tr><td id='space' colspan="2"></td></tr>
    {$this->element->cencel}
    {$this->element->submit}
  </table>
</form>