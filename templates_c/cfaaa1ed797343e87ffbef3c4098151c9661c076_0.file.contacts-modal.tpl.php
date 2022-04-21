<?php
/* Smarty version 4.1.0, created on 2022-04-21 16:08:19
  from 'D:\xampp\htdocs\mvc\template\contacts\contacts-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62616553104b32_74682338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfaaa1ed797343e87ffbef3c4098151c9661c076' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\contacts\\contacts-modal.tpl',
      1 => 1650544541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62616553104b32_74682338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="contact-add-modal" tabindex="-1" aria-labelledby="contact-add-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contact-add-modalLabel">Nový kontakt</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="/contacts" method="post">
                    <input type="hidden" name="type" value="add">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Jméno</label>
                        <input type="text" name="name" class="form-control" id="inputName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputSurname" class="form-label">Příjmení</label>
                        <input type="text" name="surname" class="form-control" id="inputSurname">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Telefonní číslo</label>
                        <input type="text" name="phone" class="form-control" id="inputPhone">
                    </div>
                    <div class="col-md-6">
                        <label for="inputNow" class="form-label">Co dělá</label>
                        <input type="text" name="now" class="form-control" id="inputNow">
                    </div>
                    <div class="col-md-6">
                        <label for="inputGoal" class="form-label">Kam míří</label>
                        <input type="text" name="goal" class="form-control" id="inputGoal">
                    </div>
                    <div class="col-md-6">
                        <label for="inputDo" class="form-label">Co dělá navíc</label>
                        <input type="text" name="do" class="form-control" id="inputDo">
                    </div>
                                        <div class="col-12">
                        <button type="submit" class="btn btn-primary">Přidat kontakt</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
