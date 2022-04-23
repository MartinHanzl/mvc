<?php
/* Smarty version 4.1.0, created on 2022-04-23 13:25:37
  from 'D:\xampp\htdocs\mvc\template\contacts\contact-update-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263e231214e19_40799241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e7b60c53beb038056e1066c6b9404299703d122' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\contacts\\contact-update-modal.tpl',
      1 => 1650713082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263e231214e19_40799241 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="contact-update-modal" tabindex="-2" aria-labelledby="contact-update-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contact-update-modalLabel">Editovat kontakt</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="/contacts" method="post">
                    <input type="hidden" name="type" value="update">
                    <input type="hidden" name="updId" class="updId">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Jméno</label>
                        <input type="text" name="name" class="form-control updName" id="inputName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputSurname" class="form-label">Příjmení</label>
                        <input type="text" name="surname" class="form-control updSurname" id="inputSurname">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control updEmail" id="inputEmail">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Telefonní číslo</label>
                        <input type="text" name="phone" class="form-control updPhone" id="inputPhone">
                    </div>
                    <div class="col-md-6">
                        <label for="inputNow" class="form-label">Co dělá</label>
                        <input type="text" name="now" class="form-control updNow" id="inputNow">
                    </div>
                    <div class="col-md-6">
                        <label for="inputGoal" class="form-label">Kam míří</label>
                        <input type="text" name="goal" class="form-control updGoal" id="inputGoal">
                    </div>
                    <div class="col-md-6">
                        <label for="inputDo" class="form-label">Co dělá navíc</label>
                        <input type="text" name="do" class="form-control updDo" id="inputDo">
                    </div>
                    <div class="col-md-6 d-flex align-items-end">
                        <div class="col-md-10">
                            <label for="inputState" class="form-label">Skupina</label>
                            <select id="inputState" class="form-select updGroup" name="group" disabled>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value['groups'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_contacts_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['category_name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-md-2"
                            style="text-align: center;height: 38px; display: flex; align-items: center; justify-content: center;cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#group-add-modal">
                            <span class="btn btn-secondary"><i class="las la-plus"></i></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Uložit kontakt</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
