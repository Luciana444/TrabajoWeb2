{include file="templates/header.tpl"}
<table>
	{foreach $videojuegos as $videojuego}
		<ul>
            <li><a href="detallejuego/{$videojuego->id}">{$videojuego->nombre}</a></li>
        </ul>
    {/foreach}
</table>
