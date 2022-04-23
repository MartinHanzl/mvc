<?php
/* Smarty version 4.1.0, created on 2022-04-23 12:29:13
  from 'D:\xampp\htdocs\mvc\template\contacts\groups-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263d4f9e9b102_54985347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e91c03e008c21b216c3b5de120128c83ee0ba670' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\contacts\\groups-modal.tpl',
      1 => 1650630616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263d4f9e9b102_54985347 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="groups-modal" tabindex="-1" aria-labelledby="groups-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="groups-modalLabel">Správa skupin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if ($_smarty_tpl->tpl_vars['contacts']->value['groups']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value['groups'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <form action="/contacts" method="post" class="row g-3 mb-3">
                            <input type="hidden" name="type" value="edit-group">
                            <input type="hidden" name="groupId" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_contacts_category'];?>
">
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control" id="inputName"
                                    value="<?php echo $_smarty_tpl->tpl_vars['group']->value['category_name'];?>
">
                            </div>
                            <div class="col-md-2">
                                <input type="color" name="color" class="form-control form-control-color" id="inputSurname"
                                    value="<?php echo $_smarty_tpl->tpl_vars['group']->value['category_color'];?>
">
                            </div>
                            <div class="col-4" style="text-align: right;">
                                <button type="submit" class="btn btn-primary" name="group-save">Uložit</button>
                                <button type="submit" class="btn btn-danger" name="group-delete">Smazat</button>
                            </div>
                        </form>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="col-md-12" data-bs-toggle="modal" data-bs-target="#group-add-modal">
                        <span class="btn btn-secondary"><i class="las la-plus"></i> <span>Přidat skupinu</span></span>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }
}
