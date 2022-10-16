{include file="templates/header.tpl"}
<p><a href='/web2/'>{$volver}</a></p>
{if $error}
    <div class="alert alert-danger mt-3">
        {$error}
    </div>
{/if}
