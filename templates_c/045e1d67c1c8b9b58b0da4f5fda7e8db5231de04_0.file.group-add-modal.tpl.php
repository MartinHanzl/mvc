<?php
/* Smarty version 4.1.0, created on 2022-04-23 12:29:13
  from 'D:\xampp\htdocs\mvc\template\contacts\group-add-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263d4f9f2c3d4_77906921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '045e1d67c1c8b9b58b0da4f5fda7e8db5231de04' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\contacts\\group-add-modal.tpl',
      1 => 1650627041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263d4f9f2c3d4_77906921 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="group-add-modal" tabindex="-1" aria-labelledby="group-add-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="group-add-modalLabel">Nový kontakt</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    data-bs-toggle="modal" data-bs-target="#contact-add-modal"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="/contacts" method="post">
                    <input type="hidden" name="type" value="group">
                    <div class="col-md-12">
                        <label for="inputName" class="form-label">Název skupiny</label>
                        <input type="text" name="title" class="form-control" id="inputName">
                    </div>
                    <div class="col-md-12">
                        <label for="inputName" class="form-label">Barevné označení</label>
                        <input type="color" name="color" class="form-control" id="inputName">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Přidat skupinu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
