		<h2 style="margin: 10px 0 0 10px;">Ваш профиль</h2>
        <div id='profile'>
          <div id='owner_bttn'>
            <img id='edit_profile' title="Редактировать профиль" style="cursor: pointer;" src="/resources/edit_prof.png"/>
            <img id='delete_profile' title="Удалить профиль" style="cursor: pointer;" src="/resources/delete_prof.png"/>
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
                <td>E-mail:</td>
                <td>{$user['user_mail']}</td>
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