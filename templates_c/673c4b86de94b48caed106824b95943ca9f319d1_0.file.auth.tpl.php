<?php
/* Smarty version 4.1.0, created on 2022-04-20 14:35:13
  from 'D:\xampp\htdocs\mvc\template\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ffe015a7388_06288388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '673c4b86de94b48caed106824b95943ca9f319d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\auth.tpl',
      1 => 1650458104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625ffe015a7388_06288388 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/auth" method="post">
    <div class="mb-3">
        <label class="form-label">Jméno</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Příjmení</label>
        <input type="text" class="form-control" name="surname" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Emailová adresa</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Heslo</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label class="form-label">Heslo znovu</label>
        <input type="password" class="form-control" name="password_rep">
    </div>
    <div class="mb-3">
        <label class="form-label">Osobní VPA číslo</label>
        <input type="text" class="form-control" name="vpa_no">
    </div>
    <div class="mb-3">
        <label class="form-label">Kód pozvánky</label>
        <input type="text" class="form-control" name="invitation_no">
    </div>
    <button type="submit" class="btn btn-primary">Registrace</button>
</form><?php }
}
