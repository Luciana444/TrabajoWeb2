<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:02:20
  from 'C:\xampp\htdocs\web2\templates\tabla_videojuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486ecc74fd46_52876459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cdea1d90a1fd691cdc544433edd8764bacb096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\tabla_videojuegos.tpl',
      1 => 1665691339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_63486ecc74fd46_52876459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videojuegos']->value, 'videojuego');
$_smarty_tpl->tpl_vars['videojuego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['videojuego']->value) {
$_smarty_tpl->tpl_vars['videojuego']->do_else = false;
?>
		<ul>
            <li><a href="detallejuego/<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['videojuego']->value->nombre;?>
</a></li>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
				<a href="borrarvideojuego/<?php echo $_smarty_tpl->tpl_vars['videojuego']->value->id;?>
" class="btn btn-outline-danger">Eliminar</a>
			<?php }?>
        </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php if ((isset($_SESSION['USER_ID']))) {?>
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
<?php }
}
}
