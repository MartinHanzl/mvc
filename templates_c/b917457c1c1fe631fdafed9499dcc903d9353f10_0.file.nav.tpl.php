<?php
/* Smarty version 4.1.0, created on 2022-04-23 12:29:13
  from 'D:\xampp\htdocs\mvc\template\_partials\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6263d4f9ba3467_84972025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b917457c1c1fe631fdafed9499dcc903d9353f10' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\_partials\\nav.tpl',
      1 => 1650630445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6263d4f9ba3467_84972025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3300847956263d4f9b9cbe4_27414223', 'main-nav');
}
/* {block 'main-nav'} */
class Block_3300847956263d4f9b9cbe4_27414223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main-nav' => 
  array (
    0 => 'Block_3300847956263d4f9b9cbe4_27414223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-nav-w">
        <div class="signed-user-div p-3 d-flex flex-column align-items-center">
            <img src="https://scontent.fprg4-1.fna.fbcdn.net/v/t39.30808-6/277729726_2269123523253936_8294867813176363298_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Ht-F0ngBXGIAX8Zow9s&_nc_ht=scontent.fprg4-1.fna&oh=00_AT9tv4rc-43X_KogFxk3Mjyp2qtvyWyatRrAEoSDpCtK_g&oe=62640A05"
                alt="" width="64" height="64" class="mb-3">
            <h5><?php echo $_smarty_tpl->tpl_vars['global']->value['fullname'];?>
</h5>
            <small><?php echo $_smarty_tpl->tpl_vars['global']->value['email'];?>
</small>
        </div>
        <ul>
            <li class="p-3"><a href="/"><i class="las la-home"></i><span>Domů</span></a></li>
            <li class="p-3"><a href="/profile"><i class="las la-user"></i><span>Profil</span></a></li>
            <li class="p-3"><a href="/contacts"><i class="las la-phone"></i><span>Seznam kontaktů</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-calendar"></i><span>Kalendář</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-clock"></i><span>Zápis hodin</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-running"></i><span>Aktivita</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-coins"></i><span>Příjmy a výdaje</span></a></li>
            <li class="p-3"><a href="#"><i class="las la-image"></i><span>Nástěnka</span></a></li>
                        <li class="p-3"><a href="#"><i class="las la-pencil-ruler"></i><span>Užitečné funkce</span></a></li>
                        <li class="p-3"><a href="#">
                    <form action="/auth" method="post">
                        <input type="hidden" name="type" value="logout">
                        <i class="las la-sign-out-alt"></i><input type="submit" value="Odhlásit se"
                                style="background: transparent; color: white; border: none;outline: none;">
                    </form>
                </a>
            </li>
        </ul>
    </div>
<?php
}
}
/* {/block 'main-nav'} */
}
