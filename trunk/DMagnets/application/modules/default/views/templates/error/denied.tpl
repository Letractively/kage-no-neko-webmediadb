{*
<script type="text/javascript">
  setTimeout('redirect("http://d_magnets.com")',600);
</script>
*}
<div style="margin: 10px;">
<h2>Вы не имеете прав доступа к данному ресурсу</h2>
{if $this->url()|truncate:6:'' != '/admin' && $this->url()|truncate:13:'' != '/registration'}
<p>Пожалуйста войдите или <a href="/registration">зарегистрируйтесь</a></p>
{/if}
</div>