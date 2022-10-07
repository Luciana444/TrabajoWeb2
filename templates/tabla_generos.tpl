<h1>{$titulo}</h1>
<table>
	{foreach from=$generos item=$genero}
		<tr>
			<td><a href="generovideojuegos/{$genero->id_genero}">{$genero->genero}</a></td>
        </tr>
    {/foreach}
</table>
