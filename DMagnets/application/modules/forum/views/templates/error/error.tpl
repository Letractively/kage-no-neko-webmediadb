<div style="position: fixed; top: 50%; left: 50%; width: 800px; height: 600px; margin: -300px 0 0 -400px; padding: 5px 0 0 5px; background-color: black; border: 2px solid grey; z-index: 999; overflow: scroll;">
  <h1>An error occurred</h1>
  <h3>Type:</h3>
  <p>{$message}</p>
  <br>
{if (isset($exception))}
  
  <h3>Exception information:</h3>
  <p>
      <b>Message:</b> {$exception->getMessage()}
  </p>
  <br>
  {if $last_log != 'none'}
  <h3>Last in error.log:</h3>
  <pre>{$last_log}</pre>
  <br>
  {/if}
  
  <h3>Stack trace:</h3>
  <pre>{$exception->getTraceAsString()}</pre>
  <br>
  
  <h3>Request Parameters:</h3>
  <pre>
  {foreach from=$request->getParams() key=name item=val}
  [{$name}]=>{$val}
  {/foreach}
  </pre>
{/if }
</div>