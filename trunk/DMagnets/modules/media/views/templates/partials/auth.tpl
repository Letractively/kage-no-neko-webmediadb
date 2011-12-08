<form id='{$this->element->getName()}' method="{$this->element->getMethod()}" action="{$this->element->getAction()}">
  <table id='auth_tab' border="0" cellspacing="1" cellpadding="0" width="100%">
    {$this->element->email}
    {$this->element->pass}
  </table>
  <table id='auth_tab' border="0" cellspacing="1" cellpadding="0" width="100%">
    {*
      <td width="70%">
        <input id='rem' type="checkbox" name="rem" value="1" checked="checked"/>
        <label for="rem">запомнить меня</label>
      </td>
    *}
    {$this->element->submit}
    <tr>
      <td colspan="2" style="text-align: center;">
        <a href="/registration">регистрация</a>
    {*
        |
        <span id='rem_pass'>забыл пароль</span>
    *}
      </td>
    </tr>
  </table>
</form>