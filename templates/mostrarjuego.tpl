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
    {if isset($smarty.session.USER_ID)}
      <tr><a href="borrarvideojuego/{$juego->id}" class="btn btn-outline-danger">Eliminar</a></tr>
      <form method="POST" action="editarvideojuego">
      <h2>Edita un videojuego</h2>
      <div class="col-xs-12 col-md-3">
        <label class="form-label">Nombre del Videojuego</label>
        <input class="form-control" name="nombre" value={$juego->nombre}>
      </div>
      <div class="col-xs-12 col-md-3">
        <label class="form-label">Fecha de Lanzamiento</label>
        <input class="form-control" name="fechadelanzamiento" value={$juego->fecha_de_lanzamiento}>
      </div>
      <div class="col-xs-12 col-md-3">
        <label class="form-label">Descripcion</label>
        <input class="form-control" name="descripcion" value={$juego->descripcion}>
      </div>
      <div class="col-xs-12 col-md-3">
        <label class="form-label">Caracteristica</label>
        <input class="form-control" name="caracteristica" value={$juego->caracteristica}>
      </div>
      <input hidden value={$juego->id} name="id">
      <button>Editar</button>
    </form>
  {/if}