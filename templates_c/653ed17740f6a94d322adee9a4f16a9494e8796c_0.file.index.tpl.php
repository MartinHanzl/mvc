<?php
/* Smarty version 4.1.0, created on 2022-04-20 16:00:09
  from 'D:\xampp\htdocs\mvc\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_626011e967cbb9_28052389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '653ed17740f6a94d322adee9a4f16a9494e8796c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\index.tpl',
      1 => 1650451504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/homepage/left-column.tpl' => 1,
    'file:template/homepage/right-column.tpl' => 1,
  ),
),false)) {
function content_626011e967cbb9_28052389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="home-w">
    <div class="d-flex col-lg-12">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_997700276626011e967a832_55143588', 'left-column');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1061985962626011e967bb06_44593557', 'left-column');
?>

    </div>
</div><?php }
/* {block 'left-column'} */
class Block_997700276626011e967a832_55143588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left-column' => 
  array (
    0 => 'Block_997700276626011e967a832_55143588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="d-flex flex-column col-lg-6 p-3">
                <?php $_smarty_tpl->_subTemplateRender("file:template/homepage/left-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php
}
}
/* {/block 'left-column'} */
/* {block 'left-column'} */
class Block_1061985962626011e967bb06_44593557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left-column' => 
  array (
    0 => 'Block_1061985962626011e967bb06_44593557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="d-flex flex-column col-lg-6 p-3">
                <?php $_smarty_tpl->_subTemplateRender("file:template/homepage/right-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php
}
}
/* {/block 'left-column'} */
}
