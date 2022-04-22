<?php
/* Smarty version 4.1.0, created on 2022-04-21 20:29:58
  from 'D:\xampp\htdocs\mvc\template\auth\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6261a2a618fd47_70557846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89439b295d296fbf7418b87f2de1dc7cd9d68ff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\auth\\login-form.tpl',
      1 => 1650526831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6261a2a618fd47_70557846 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/auth" method="post">
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
