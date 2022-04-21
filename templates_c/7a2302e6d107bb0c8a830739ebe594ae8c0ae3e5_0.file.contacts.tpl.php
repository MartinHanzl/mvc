<?php
/* Smarty version 4.1.0, created on 2022-04-21 16:08:18
  from 'D:\xampp\htdocs\mvc\template\contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62616552e03294_22434480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a2302e6d107bb0c8a830739ebe594ae8c0ae3e5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\contacts.tpl',
      1 => 1650542548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/contacts/functions.tpl' => 1,
    'file:template/contacts/contacts-modal.tpl' => 1,
    'file:template/contacts/contacts-table.tpl' => 1,
  ),
),false)) {
function content_62616552e03294_22434480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="contacts-w">
    <div class="d-flex col-lg-12 col-12">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108135555862616552dfa233_91462955', 'functions');
?>

    </div>
    <div class="d-flex col-lg-12 col-12 block-single">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136436017962616552e02722_37587137', 'functions');
?>

    </div>
</div><?php }
/* {block 'functions'} */
class Block_108135555862616552dfa233_91462955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'functions' => 
  array (
    0 => 'Block_108135555862616552dfa233_91462955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:template/contacts/functions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:template/contacts/contacts-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'functions'} */
/* {block 'functions'} */
class Block_136436017962616552e02722_37587137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'functions' => 
  array (
    0 => 'Block_136436017962616552e02722_37587137',
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
