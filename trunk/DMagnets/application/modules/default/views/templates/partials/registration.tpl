        <form id='{$this->element->getName()}' enctype="{$this->element->getEnctype()}" method="{$this->element->getMethod()}" action="{$this->element->getAction()}">
          <table id='form_tab'>
            <tr>
              <td colspan="2" style="border-bottom: 2px solid rgb(202,81,10);">
                <h2>Форма регистрации</h2>
              </td>
            </tr>
            <tr><td id='space' colspan="2"></td></tr>
            {$this->element->email}
            {$this->element->pass}
            {$this->element->pass2}
            <tr><td id='space' colspan="2"></td></tr>
            {$this->element->nickname}
            {$this->element->first_name}
            {$this->element->last_name}
            <tr><td id='space' colspan="2"></td></tr>
            {$this->element->sex}
            {$this->element->birthday}
            {$this->element->avatar_upl}
            <tr><td id='space' colspan="2"></td></tr>
            <tr><td id='space' colspan="2"></td></tr>
            {$this->element->reset}
            {$this->element->submit}
          </table>
        </form>