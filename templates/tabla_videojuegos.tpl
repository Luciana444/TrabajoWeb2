{include file="templates/header.tpl"}
<h1>{$titulo}</h1>
<p><a href='/web2/'>{$inicio}</a></p>
<table>
	{foreach $videojuegos as $videojuego}
		<ul>
			<li><a href="detallejuego/{$videojuego->id}">{$videojuego->nombre}</a></li>
			{if isset($smarty.session.USER_ID) && $borrado == "borrado"}
				<a href="borrarvideojuego/{$videojuego->id}" class="btn btn-outline-danger">Eliminar</a>
			{/if}
		</ul>
	{/foreach}
</table>
{if isset($smarty.session.USER_ID) && $seccion == "videojuegos"}
	<form method="POST" action="agregarvideojuego">
		<h2>Agrega un videojuego</h2>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Nombre del videojuego</label>
			<input type="text" class="form-control" name="videojuego" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Fecha de Lanzamiento</label>
			<input type="text" class="form-control" name="fechadelanzamiento" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Descripcion</label>
			<input type="text" class="form-control" name="descripcion" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Multijugador o Solitario</label>
			<input type="text" class="form-control" name="caracteristica" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Genero</label>
			<select name="id_genero">
				{foreach from=$generos item=$genero}
					<option value="{$genero->id_genero}">{$genero->genero}</option>
				{/foreach}
			</select>
			<button type="submit">Agregar</button>
		</div>
	</form>
	<form method="POST" action="editarvideojuego">
		<h2>Edita un videojuego</h2>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Nombre del Videojuego</label>
			<input class="form-control" name="nombre" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Fecha de Lanzamiento</label>
			<input class="form-control" name="fechadelanzamiento" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Descripcion</label>
			<input class="form-control" name="descripcion" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Caracteristica</label>
			<input class="form-control" name="caracteristica" required>
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Videojuego que Deseo Editar</label>
			<select name="id">
				{foreach $videojuegos as $videojuego}
					<option value="{$videojuego->id}">{$videojuego->nombre}</option>
				{/foreach}
			</select>
			<button type="submit">Editar</button>
		</div>
	</form>
{/if}