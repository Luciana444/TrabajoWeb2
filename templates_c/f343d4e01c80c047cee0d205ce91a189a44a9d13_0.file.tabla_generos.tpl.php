<?php
/* Smarty version 4.2.1, created on 2022-10-10 21:21:07
  from 'C:\xampp\htdocs\web2a\templates\tabla_generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634470a3608f73_62961592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f343d4e01c80c047cee0d205ce91a189a44a9d13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2a\\templates\\tabla_generos.tpl',
      1 => 1665339612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634470a3608f73_62961592 (Smarty_Internal_Template $_smarty_tpl) {
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
        </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php }
}
