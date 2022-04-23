<?php
/* Smarty version 4.1.0, created on 2022-04-23 13:22:06
  from 'D:\xampp\htdocs\mvc\template\layouts\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263e15e312943_57418865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be20124808ed36c372e5b86df9252523f5fb7b28' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\layouts\\auth.tpl',
      1 => 1650452374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../_partials/stylesheet.tpl' => 1,
    'file:../_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6263e15e312943_57418865 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown CRM</title>
    <?php $_smarty_tpl->_subTemplateRender('file:../_partials/stylesheet.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body>
    <div id="auth-w" class="d-flex">
        <div id="main-content-auth-w" class="container col-lg-10">
            <?php $_smarty_tpl->_subTemplateRender("../".((string)$_smarty_tpl->tpl_vars['page_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </div>
</body>

<?php $_smarty_tpl->_subTemplateRender("file:../_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
