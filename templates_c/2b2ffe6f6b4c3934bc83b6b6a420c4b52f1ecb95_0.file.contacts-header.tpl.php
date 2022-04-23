<?php
/* Smarty version 4.1.0, created on 2022-04-23 12:29:13
  from 'D:\xampp\htdocs\mvc\template\contacts\contacts-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263d4f9d3ca38_45549091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b2ffe6f6b4c3934bc83b6b6a420c4b52f1ecb95' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\contacts\\contacts-header.tpl',
      1 => 1650634673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263d4f9d3ca38_45549091 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12 col-xs-12 col-12 block-single p-3 mb-4">
    <div class="block-header p-1 mb-3 d-flex align-items-center">
        <div class="col-md-7">
            <h3>Přehled kontaktů</h3>
        </div>
        <div class="col-md-5 d-flex justify-content-end align-items-center">
            <div class="block-functions-single col-lg-2 col-xs-4 col-12 d-flex justify-content-center align-items-center ms-3 p-3" data-bs-toggle="modal"
                data-bs-target="#contact-add-modal">
                <i class="las la-plus"></i>
            </div>

            <div class="block-functions-single col-lg-2 col-xs-4 col-12 d-flex justify-content-center align-items-center ms-3 p-3" data-bs-toggle="modal"
                data-bs-target="#groups-modal">
                <i class="las la-edit"></i>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-12 d-flex">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value['data']['number'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <div class="col-md-2">
                <p>Počet kontaktů: <strong class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['data']->value['numberOfContact'];?>
</strong></p>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value['data']['now'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <div class="col-md-2">
                <p>Víte co dělá: <strong class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['data']->value['number'];?>
</strong></p>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value['data']['goal'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <div class="col-md-2">
                <p>Víte kam míří: <strong class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['data']->value['goalNumber'];?>
</strong></p>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value['data']['do'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
            <div class="col-md-2">
                <p>Víte co dělá navíc: <strong class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['data']->value['doNumber'];?>
</strong></p>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
