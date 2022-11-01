{include file="templates/header.tpl"}
{if $seccion == "genero"}
<h1>Videojuego de {$titulo}</h1>
{else}
<h1>{$titulo}</h1>
{/if}
<p><a href='/web2/'>{$inicio}</a></p>
<table>
	{foreach $videojuegos as $videojuego}
		<ul>
			<li><a href="detallejuego/{$videojuego->id}">{$videojuego->nombre}</a></li>
		</ul>
	{/foreach}
</table>
{if isset($smarty.session.USER_ID) && $seccion == "videojuegos"}
	<form method="POST" action="agregarvideojuego">
		<h2>Agrega un videojuego</h2>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Nombre del videojuego</label>
			<input type="text" class="form-control" name="videojuego">
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Fecha de Lanzamiento</label>
			<input type="text" class="form-control" name="fechadelanzamiento">
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Descripcion</label>
			<input type="text" class="form-control" name="descripcion">
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Multijugador o Solitario</label>
			<input type="text" class="form-control" name="caracteristica">
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
{/if}