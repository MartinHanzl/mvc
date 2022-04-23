<?php
/* Smarty version 4.1.0, created on 2022-04-23 12:31:05
  from 'D:\xampp\htdocs\mvc\template\contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263d569925fd6_03193002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a2302e6d107bb0c8a830739ebe594ae8c0ae3e5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\contacts.tpl',
      1 => 1650709862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/contacts/contacts-header.tpl' => 1,
    'file:template/contacts/contacts-modal.tpl' => 1,
    'file:template/contacts/groups-modal.tpl' => 1,
    'file:template/contacts/group-add-modal.tpl' => 1,
    'file:template/contacts/contact-update-modal.tpl' => 1,
    'file:template/contacts/contacts-table.tpl' => 1,
  ),
),false)) {
function content_6263d569925fd6_03193002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="contacts-w">
    <div class="d-flex col-lg-12 col-12">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6055191146263d56991c891_10580882', 'functions');
?>

    </div>
    <div class="d-flex col-lg-12 col-12 block-single">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3612856156263d569925530_26714364', 'functions');
?>

    </div>
</div>
<br><?php }
/* {block 'functions'} */
class Block_6055191146263d56991c891_10580882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'functions' => 
  array (
    0 => 'Block_6055191146263d56991c891_10580882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:template/contacts/contacts-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:template/contacts/contacts-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:template/contacts/groups-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:template/contacts/group-add-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:template/contacts/contact-update-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'functions'} */
/* {block 'functions'} */
class Block_3612856156263d569925530_26714364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'functions' => 
  array (
    0 => 'Block_3612856156263d569925530_26714364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:template/contacts/contacts-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'functions'} */
}
