{{include file="templates/header.tpl"}}
<p><a href='/web2/generovideojuegos/{$juego->id_genero}'>{$volver}</a></p>
<table class="table">
  <tbody>
    <tr>
      <th>Nombre del Videojuego</th>
      <td>{$juego->nombre}</td>
    </tr>
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