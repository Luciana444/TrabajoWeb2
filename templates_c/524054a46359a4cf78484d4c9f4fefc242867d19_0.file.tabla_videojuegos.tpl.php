<?php
/* Smarty version 4.2.1, created on 2022-10-10 21:29:38
  from 'C:\xampp\htdocs\web2a\templates\tabla_videojuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634472a23a93d5_20445832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '524054a46359a4cf78484d4c9f4fefc242867d19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2a\\templates\\tabla_videojuegos.tpl',
      1 => 1665339602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634472a23a93d5_20445832 (Smarty_Internal_Template $_smarty_tpl) {
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
        </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
