{include file="templates/header.tpl"}
<h1>{$titulo}</h1>
<table>
	{foreach from=$generos item=$genero}
		<ul>
			<li><a href="generovideojuegos/{$genero->id_genero}">{$genero->genero}</a></td>
				{if isset($smarty.session.USER_ID)}
					<a href="borrargenero/{$genero->id_genero}" class="btn btn-outline-danger">Eliminar</a>
				{/if}
		</ul>
	{/foreach}
</table>
{if isset($smarty.session.USER_ID)}
	<form method="POST" action="agregargenero">
		<h2>Agrega un genero</h2>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Nombre del Genero</label>
			<input type="text" class="form-control" name="genero" required>
			<button type="submit">Agregar</button>
		</div>
	</form>
	<form method="POST" action="editargenero">
		<h2>Edita un genero</h2>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Genero Nuevo</label>
			<input class="form-control" name="genero" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label"> Genero que se Suplanta </label>
			<select name="id_genero">
				{foreach from=$generos item=$genero}
					<option value="{$genero->id_genero}">{$genero->genero}</option>
				{/foreach}
			</select>
			<button type="submit">Editar</button>
		</div>
	</form>
{/if}
