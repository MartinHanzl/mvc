<?php
/* Smarty version 4.1.0, created on 2022-04-21 09:01:16
  from 'D:\xampp\htdocs\mvc\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6261013c3577a6_73618528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '653ed17740f6a94d322adee9a4f16a9494e8796c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\index.tpl',
      1 => 1650524471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/homepage/left-column.tpl' => 1,
    'file:template/homepage/right-column.tpl' => 1,
  ),
),false)) {
function content_6261013c3577a6_73618528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="home-w d-flex col-lg-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8532878756261013c3507f6_06139038', 'left-column');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18065795786261013c356d55_22507733', 'right-column');
?>

</div><?php }
/* {block 'left-column'} */
class Block_8532878756261013c3507f6_06139038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left-column' => 
  array (
    0 => 'Block_8532878756261013c3507f6_06139038',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class=" left-column d-flex flex-column col-xs-12 col-md-6 col-lg-6 col-12 p-3">
            <?php $_smarty_tpl->_subTemplateRender("file:template/homepage/left-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    <?php
}
}
/* {/block 'left-column'} */
/* {block 'right-column'} */
class Block_18065795786261013c356d55_22507733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right-column' => 
  array (
    0 => 'Block_18065795786261013c356d55_22507733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="right-column d-flex flex-column col-xs-12 col-md-6 col-lg-6 col-12 p-3">
            <?php $_smarty_tpl->_subTemplateRender("file:template/homepage/right-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    <?php
}
}
/* {/block 'right-column'} */
}
