<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:26:59
  from 'C:\xampp\htdocs\web2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c85338c1ce1_70898943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2b035d8b078b0ea139091dc4d393d4e37646d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\error.tpl',
      1 => 1665959206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634c85338c1ce1_70898943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<p><a href='/web2/'><?php echo $_smarty_tpl->tpl_vars['volver']->value;?>
</a></p>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-danger mt-3">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }
}
}
