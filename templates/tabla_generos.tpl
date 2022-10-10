{include file="templates/header.tpl"}
<h1>{$titulo}</h1>
<table>
	{foreach from=$generos item=$genero}
		<ul>
			<li><a href="generovideojuegos/{$genero->id_genero}">{$genero->genero}</a></td>
        </ul>
    {/foreach}
</table>

