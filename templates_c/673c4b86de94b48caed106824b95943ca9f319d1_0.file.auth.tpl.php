<?php
/* Smarty version 4.1.0, created on 2022-04-23 13:22:06
  from 'D:\xampp\htdocs\mvc\template\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263e15e3aed63_86608674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '673c4b86de94b48caed106824b95943ca9f319d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\auth.tpl',
      1 => 1650528063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/auth/login-form.tpl' => 1,
    'file:../template/auth/register-form.tpl' => 1,
  ),
),false)) {
function content_6263e15e3aed63_86608674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="auth-block col-12 col-xs-12 col-lg-3 p-5" data-bs-toggle="modal" data-bs-target="#login-modal">
            <i class="las la-sign-in-alt"></i>
            <p>Přihlášení</p>
        </div>
        <div class="auth-block col-12 col-xs-12 col-lg-3 p-5" data-bs-toggle="modal" data-bs-target="#register-modal">
            <i class="las la-user-plus"></i>
            <p>Registrace</p>
        </div>
    </div>
        <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-modalLabel">Přihlášení</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21394956826263e15e3ad0a1_80529543', "login-form");
?>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="register-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="register-modalLabel">Registrace</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16551980786263e15e3ae2e6_21197613', "register-form");
?>

                </div>
            </div>
        </div>
    </div>
</div><?php }
/* {block "login-form"} */
class Block_21394956826263e15e3ad0a1_80529543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login-form' => 
  array (
    0 => 'Block_21394956826263e15e3ad0a1_80529543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender("file:../template/auth/login-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block "login-form"} */
/* {block "register-form"} */
class Block_16551980786263e15e3ae2e6_21197613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'register-form' => 
  array (
    0 => 'Block_16551980786263e15e3ae2e6_21197613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender("file:../template/auth/register-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block "register-form"} */
}
