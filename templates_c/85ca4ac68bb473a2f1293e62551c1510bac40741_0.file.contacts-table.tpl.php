<?php
/* Smarty version 4.1.0, created on 2022-04-23 13:22:11
  from 'D:\xampp\htdocs\mvc\template\homepage\contacts-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263e16398f8c4_57897078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ca4ac68bb473a2f1293e62551c1510bac40741' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\homepage\\contacts-table.tpl',
      1 => 1650645564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263e16398f8c4_57897078 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-xs-12 col-md-12 col-lg-12 col-12 block-single p-3 mb-4">
    <div class="block-header p-1 mb-3">
        <h3>Seznam kontaktů</h3>
    </div>
    <div class="mb-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jméno</th>
                    <th scope="col">Příjmení</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Skupina</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['home']->value['contact'], 'contact', false, 'key');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                    <tr>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['surname'];?>
</td>
                        <td><a href="tel:000420<?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>
</a></td>
                        <td><span class="badge" style="background-color: <?php echo $_smarty_tpl->tpl_vars['contact']->value['category_color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['contact']->value['category_name'];?>
</span></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div><?php }
}
