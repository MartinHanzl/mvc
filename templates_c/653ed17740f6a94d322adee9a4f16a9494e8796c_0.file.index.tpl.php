<?php
/* Smarty version 4.1.0, created on 2022-04-19 22:01:56
  from 'D:\xampp\htdocs\mvc\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625f1534ed5c42_67991596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '653ed17740f6a94d322adee9a4f16a9494e8796c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\index.tpl',
      1 => 1650398513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/homepage/left-column.tpl' => 1,
    'file:template/homepage/right-column.tpl' => 1,
  ),
),false)) {
function content_625f1534ed5c42_67991596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="home-w d-flex">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1150439892625f1534ecf683_19250665', 'left-column');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1977777311625f1534ed5215_48897813', 'left-column');
?>

</div><?php }
/* {block 'left-column'} */
class Block_1150439892625f1534ecf683_19250665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left-column' => 
  array (
    0 => 'Block_1150439892625f1534ecf683_19250665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="d-flex flex-column col-lg-6 p-2">
            <?php $_smarty_tpl->_subTemplateRender("file:template/homepage/left-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    <?php
}
}
/* {/block 'left-column'} */
/* {block 'left-column'} */
class Block_1977777311625f1534ed5215_48897813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left-column' => 
  array (
    0 => 'Block_1977777311625f1534ed5215_48897813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="d-flex flex-column col-lg-6 p-2">
            <?php $_smarty_tpl->_subTemplateRender("file:template/homepage/right-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    <?php
}
}
/* {/block 'left-column'} */
}
