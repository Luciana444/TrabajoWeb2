<?php
/* Smarty version 4.2.1, created on 2022-10-07 21:15:05
  from 'C:\xampp\htdocs\web2\templates\tabla_generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63407ab9dd43e4_68096226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127f07d5ba2ec34fca3b7a1ad582ce3872ca20e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\tabla_generos.tpl',
      1 => 1665169916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63407ab9dd43e4_68096226 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
		<tr>
			<td><a href="generovideojuegos/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</a></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
