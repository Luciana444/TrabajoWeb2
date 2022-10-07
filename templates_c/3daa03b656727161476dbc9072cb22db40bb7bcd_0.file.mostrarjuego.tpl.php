<?php
/* Smarty version 4.2.1, created on 2022-10-07 20:48:42
  from 'C:\xampp\htdocs\web2\templates\mostrarjuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340748a5838a9_92756356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3daa03b656727161476dbc9072cb22db40bb7bcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\mostrarjuego.tpl',
      1 => 1665168520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6340748a5838a9_92756356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<p><a href='../videojuego'><?php echo $_smarty_tpl->tpl_vars['volver']->value;?>
</a></p>
<table class="table">
  <tbody>
    <tr>
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
</table><?php }
}
