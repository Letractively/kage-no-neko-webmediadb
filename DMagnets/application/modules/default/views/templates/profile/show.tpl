{if $user != null}
        <h2 style="margin: 10px 0 0 10px;">Профиль пользователя: <span style="color: rgb(202,81,10);">{$user['nickname']}</span></h2>
        <div id='profile'>
          <div id='guest_bttn'>
            <img id='send_email' title="Отправить e-mail" style="cursor: pointer;" src="/resources/mail.png"/>
          </div>
          <div id='profile_info' style="z-index: 100; display: block;">
            <table style="border-spacing:0px;">
              <tr>
                <td>Полное имя:</td>
                <td>{$user['user_first_name']} {$user['user_last_name']}</td>
              </tr>
              <tr>
                <td>Пол:</td>
                <td>{if $user['gender'] == 'male'}мужской{else}женский{/if}</td>
              </tr>
              <tr>
                <td>Дата рождения:</td>
                <td>{$user['user_birthday']}</td>
              </tr>
              <tr>
                <td>Группа:</td>
                <td>{$user['group']}</td>
              </tr>
              <tr>
                <td>Дата регистрации:</td>
                <td>{$user['reg_date']}</td>
              </tr>
            </table>
          </div>
        </div>
{else}
<h2 style="margin: 10px 0 0 10px;">Профиль пользователя не найден</h2>
{/if}