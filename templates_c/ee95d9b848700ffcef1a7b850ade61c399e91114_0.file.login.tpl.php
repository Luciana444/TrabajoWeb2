<?php
/* Smarty version 4.2.1, created on 2022-10-16 04:27:56
  from 'C:\xampp\htdocs\web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b6c2cd01fe5_67294175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee95d9b848700ffcef1a7b850ade61c399e91114' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\login.tpl',
      1 => 1665885805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634b6c2cd01fe5_67294175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="POST" action="validar">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
    <div class="alert alert-danger mt-3">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
  <?php }?>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



<?php }
}
