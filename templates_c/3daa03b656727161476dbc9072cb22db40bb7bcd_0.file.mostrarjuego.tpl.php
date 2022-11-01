<?php
/* Smarty version 4.2.1, created on 2022-11-01 01:29:12
  from 'C:\xampp\htdocs\web2\templates\mostrarjuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63606858983171_82164853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3daa03b656727161476dbc9072cb22db40bb7bcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\mostrarjuego.tpl',
      1 => 1667262551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_63606858983171_82164853 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<p><a href='/web2/generovideojuegos/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_genero;?>
'><?php echo $_smarty_tpl->tpl_vars['volver']->value;?>
</a></p>
<table class="table">
  <tbody>
    <tr>
      <th>Nombre del Videojuego</th>
      <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</td>
    </tr>
    <th>Fecha de Lanzamiento</th>
    <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->fecha_de_lanzamiento;?>
</td>
    </tr>
    <tr>
      <th>Descripcion</th>
      <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</td>
    </tr>
    <tr>
      <th>Caracteristica</th>
      <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->caracteristica;?>
</td>
    </tr>
  </tbody>
</table>
    <?php if ((isset($_SESSION['USER_ID']))) {?>
      <tr><a href="borrarvideojuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
" class="btn btn-outline-danger">Eliminar</a></tr>
      <form method="POST" action="editarvideojuego">
      <h2>Edita un videojuego</h2>
      <div class="col-xs-12 col-md-3">
        <label class="form-label">Nombre del Videojuego</label>
        <input class="form-control" name="nombre" value=<?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
>
      </div>
      <div class="col-xs-12 col-md-3">
        <label class="form-label">Fecha de Lanzamiento</label>
        <input class="form-control" name="fechadelanzamiento" value=<?php echo $_smarty_tpl->tpl_vars['juego']->value->fecha_de_lanzamiento;?>
>
      </div>
      <div class="col-xs-12 col-md-3">
        <label class="form-label">Descripcion</label>
        <input class="form-control" name="descripcion" value=<?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
>
      </div>
      <div class="col-xs-12 col-md-3">
        <label class="form-label">Caracteristica</label>
        <input class="form-control" name="caracteristica" value=<?php echo $_smarty_tpl->tpl_vars['juego']->value->caracteristica;?>
>
      </div>
      <input hidden value=<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
 name="id">
      <button>Editar</button>
    </form>
  <?php }
}
}
