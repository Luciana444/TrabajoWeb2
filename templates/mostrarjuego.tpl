{include file="templates/header.tpl"}
<p><a href='../videojuego'>{$volver}</a></p>
<table class="table">
  <tbody>
    <tr>
    <th>Fecha de Lanzamiento</th>
      <td>{$juego->fecha_de_lanzamiento}</td>
    </tr>
    <tr>
    <th>Descripcion</th>
      <td>{$juego->descripcion}</td>
    </tr>
    <tr>
    <th>Caracteristica</th>
      <td>{$juego->caracteristica}</td>
    </tr>
  </tbody>
</table>