<?php
/* Smarty version 4.1.0, created on 2022-04-23 12:29:13
  from 'D:\xampp\htdocs\mvc\template\layouts\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263d4f9a7df43_98775888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '255ae23c142e04f2c003ed9dfac432699cb66a1e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\layouts\\layout.tpl',
      1 => 1650525814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../_partials/stylesheet.tpl' => 1,
    'file:../_partials/nav.tpl' => 1,
    'file:../_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6263d4f9a7df43_98775888 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div id="main-w" class="d-flex">
        <div id="main-nav-w" class="col-xs-12 col-lg-2 col-md-12 col-12 nav-hidden">
            <div class="mobile-nav-toggle d-flex justify-content-center p-3 align-items-center hidden-md">
                <i id="mobile-nav-toggle" class="las la-angle-up"></i>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:../_partials/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div id="main-content-w" class="container col-xs-12 col-lg-10 col-12 ">
            <?php $_smarty_tpl->_subTemplateRender("../".((string)$_smarty_tpl->tpl_vars['page_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </div>
</body>

<?php $_smarty_tpl->_subTemplateRender("file:../_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
