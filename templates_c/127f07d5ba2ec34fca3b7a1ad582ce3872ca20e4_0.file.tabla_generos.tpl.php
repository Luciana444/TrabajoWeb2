<?php
/* Smarty version 4.2.1, created on 2022-11-01 00:55:09
  from 'C:\xampp\htdocs\web2\templates\tabla_generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6360605d59ae62_12484564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127f07d5ba2ec34fca3b7a1ad582ce3872ca20e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\tabla_generos.tpl',
      1 => 1667260508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6360605d59ae62_12484564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
		<ul>
			<li><a href="generovideojuegos/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</a></td>
				<?php if ((isset($_SESSION['USER_ID']))) {?>
					<a href="borrargenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" class="btn btn-outline-danger">Eliminar</a>
				<?php }?>
		</ul>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php if ((isset($_SESSION['USER_ID']))) {?>
	<form method="POST" action="agregargenero">
		<h2>Agrega un genero</h2>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Nombre del Genero</label>
			<input type="text" class="form-control" name="genero">
			<button type="submit">Agregar</button>
		</div>
	</form>
	<form method="POST" action="editargenero">
		<h2>Edita un genero</h2>
		<div class="col-xs-12 col-md-3">
			<label class="form-label">Genero Nuevo</label>
			<input class="form-control" name="genero">
		</div>
		<div class="col-xs-12 col-md-3">
			<label class="form-label"> Genero que se Suplanta </label>
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
			<button type="submit">Editar</button>
		</div>
	</form>
<?php }
}
}
