<?php
/* Smarty version 4.2.1, created on 2022-10-16 00:41:25
  from 'C:\xampp\htdocs\web2\templates\prueba.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b3715a16d90_12230478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d7d60f1616da956ad09f770f6789318efeff068' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\prueba.tpl',
      1 => 1665873684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634b3715a16d90_12230478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="POST" action="editargenero">
  <div class="mb-3">
    <label class="form-label">Genero</label>
    <input class="form-control" name="genero">
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form><?php }
}
