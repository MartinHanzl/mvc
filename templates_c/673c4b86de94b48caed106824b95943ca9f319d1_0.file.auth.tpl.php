<?php
/* Smarty version 4.1.0, created on 2022-04-20 17:52:47
  from 'D:\xampp\htdocs\mvc\template\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62602c4fc3da65_85282285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '673c4b86de94b48caed106824b95943ca9f319d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\auth.tpl',
      1 => 1650469962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62602c4fc3da65_85282285 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="/auth" method="post">
    <input type="hidden" name="type" value="login">
    <div class="mb-3">
        <label class="form-label">Emailová adresa</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Heslo</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Přihlášení</button>
</form><?php }
}
