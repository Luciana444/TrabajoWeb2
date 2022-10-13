{include file="templates/header.tpl"}
<h1>{$titulo}</h1>
<table>
	{foreach from=$generos item=$genero}
		<ul>
			<li><a href="generovideojuegos/{$genero->id_genero}">{$genero->genero}</a></td>
		</ul>
    {/foreach}
</table>
{if isset($smarty.session.USER_ID)}
	<form method="POST" action="agregargenero">
	<div class="mb-3">
		<label class="form-label">Nombre del Genero</label>
		<input type="text" class="form-control" name="genero">
	</div>
	<button type="submit" class="btn btn-primary">Agregar</button>
	</form>
{/if}
