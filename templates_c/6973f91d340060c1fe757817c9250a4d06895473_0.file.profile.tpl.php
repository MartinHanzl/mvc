<?php
/* Smarty version 4.1.0, created on 2022-04-20 16:27:13
  from 'D:\xampp\htdocs\mvc\template\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_626018416029b6_28758407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6973f91d340060c1fe757817c9250a4d06895473' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\profile.tpl',
      1 => 1650464801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/profile/main-info.tpl' => 1,
  ),
),false)) {
function content_626018416029b6_28758407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="profile-w">
    <div class="d-flex col-lg-12">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1119494144626018415fc878_03585419', 'main-info');
?>

    </div>
</div>

<?php }
/* {block 'main-info'} */
class Block_1119494144626018415fc878_03585419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main-info' => 
  array (
    0 => 'Block_1119494144626018415fc878_03585419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:template/profile/main-info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'main-info'} */
}
