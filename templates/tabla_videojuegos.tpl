<table>
	{foreach from=$videojuegos item=$videojuego}
		<tr>
            <li><a href="detallejuego/{$videojuego->id}">{$videojuego->nombre}</a></li>
        </tr>
    {/foreach}
</table>
