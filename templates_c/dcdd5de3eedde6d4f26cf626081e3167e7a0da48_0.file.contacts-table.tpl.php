<?php
/* Smarty version 4.1.0, created on 2022-04-22 12:15:35
  from 'D:\xampp\htdocs\mvc\template\contacts\contacts-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62628047bc6244_78830857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcdd5de3eedde6d4f26cf626081e3167e7a0da48' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\contacts\\contacts-table.tpl',
      1 => 1650622532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62628047bc6244_78830857 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-12 p-3">
    <table class="table table-hover" id="contact-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jméno</th>
                <th scope="col">Příjmení</th>
                <th scope="col">Telefon</th>
                <th scope="col">Email</th>
                <th scope="col">Skupina</th>
                <th scope="col">Co dělá</th>
                <th scope="col">Kam míří</th>
                <th scope="col">Co dělá navíc</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['contacts']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value['contacts'], 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                    <tr>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contacts_info'];?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['surname'];?>
</td>
                        <td><a href="tel:000<?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>
</a></td>
                        <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
</a></td>
                        <td><span class="badge"
                                style="background-color: <?php echo $_smarty_tpl->tpl_vars['contact']->value['category_color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['contact']->value['category_name'];?>
</span></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['now'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['goal'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['do'];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
</div><?php }
}
