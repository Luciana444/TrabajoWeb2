{include file="templates/header.tpl"}
<table>
	{foreach $videojuegos as $videojuego}
		<ul>
            <li><a href="detallejuego/{$videojuego->id}">{$videojuego->nombre}</a></li>
            {if isset($smarty.session.USER_ID)}
				<a href="borrarvideojuego/{$videojuego->id}" class="btn btn-outline-danger">Eliminar</a>
			{/if}
        </ul>
    {/foreach}
</table>
{if isset($smarty.session.USER_ID)}
    <form method="POST" action="videojuego">
	<div class="mb-3">
		<label class="form-label">Nombre del videojuego</label>
		<input type="text" class="form-control" name="videojuego">
	</div>
    <div class="mb-3">
		<label class="form-label">Fecha de Lanzamiento</label>
		<input type="text" class="form-control" name="fechadelanzamiento">
	</div>
    <div class="mb-3">
		<label class="form-label">Descripcion</label>
		<input type="text" class="form-control" name="descripcion">
	</div>
    <div class="mb-3">
		<label class="form-label">Multijugador o Solitario</label>
		<input type="text" class="form-control" name="caracteristica">
	</div>
	<button type="submit" class="btn btn-primary">Agregar</button>
	</form>
{/if}
