<?php
/* Smarty version 4.2.1, created on 2022-11-01 01:19:01
  from 'C:\xampp\htdocs\web2\templates\tabla_videojuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636065f541bf59_59027960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cdea1d90a1fd691cdc544433edd8764bacb096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\tabla_videojuegos.tpl',
      1 => 1667261917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_636065f541bf59_59027960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['seccion']->value == "genero") {?>
<h1>Videojuego de <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<?php } else { ?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<?php }?>
<p><a href='/web2/'><?php echo $_smarty_tpl->tpl_vars['inicio']->value;?>
</a></p>
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
		</ul>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php if ((isset($_SESSION['USER_ID'])) && $_smarty_tpl->tpl_vars['seccion']->value == "videojuegos") {?>
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
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
			<button type="submit">Agregar</button>
		</div>
	</form>
<?php }
}
}
