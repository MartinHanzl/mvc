<?php
/* Smarty version 4.1.0, created on 2022-04-19 21:17:13
  from 'D:\xampp\htdocs\mvc\template\homepage\contact-money-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625f0ab9e38ce5_08435687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e054c56dac37ec987563818385958b2a34a47d11' => 
    array (
      0 => 'D:\\xampp\\htdocs\\mvc\\template\\homepage\\contact-money-info.tpl',
      1 => 1650395831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625f0ab9e38ce5_08435687 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12 homepage-info-block-single p-3 mb-4">
    <div class="block-header p-1 mb-3">
        <h3 cla>Příjmy a výdaje - <?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</h3>
    </div>
    <div class="mb-3">
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>
    <div class="block-footer mt-3 d-flex justify-content-end">
        <a href="#" class="btn btn-secondary"><span>Přejít na přehled</span><i class="las la-angle-right"></i></a>
    </div>
</div>
<div class="col-lg-12 homepage-info-block-single p-3 mb-4">
    <div class="block-header p-1 mb-3">
        <h3 cla>Přátelé</h3>
    </div>
    <div class="mb-3">
        <div class="homepage-single-contact d-flex align-items-center">
            <div class="homepage-single-contact-img col-lg-3">
                <img src="https://scontent.fprg4-1.fna.fbcdn.net/v/t1.6435-9/151905749_3766841923355087_1992276211671225389_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=DBH6sYDnxuIAX-Uf3Td&_nc_ht=scontent.fprg4-1.fna&oh=00_AT8sPubsrhzl-Pmks70pDlLNFaVaCHjd4XeFmloKmlehJg&oe=6284515C"
                    alt="" width="64" height="64">
            </div>
            <div class="ml-5 col-lg-7">
                <h5>Matěj Kubeček</h5>
                <span>Online</span>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="las la-sms"></i></a>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="homepage-single-contact d-flex align-items-center">
            <div class="homepage-single-contact-img col-lg-3">
                <img src="https://scontent.fprg4-1.fna.fbcdn.net/v/t1.6435-9/44520837_10217856324144683_8603684109459390464_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=61HGClmUwBoAX9czKLO&_nc_ht=scontent.fprg4-1.fna&oh=00_AT-_C-MeMu0vRwxzW6a0goa-cSAN8XTfSOTff2ZlF3ywDA&oe=628573F0"
                    alt="" width="64" height="64">
            </div>
            <div class="ml-5 col-lg-7">
                <h5>Erik Šimek</h5>
                <span>Online před 15 minutami</span>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="las la-sms"></i></a>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="homepage-single-contact d-flex align-items-center">
            <div class="homepage-single-contact-img col-lg-3">
                <img src="https://scontent.fprg4-1.fna.fbcdn.net/v/t1.6435-9/81535337_2593161437417090_5779361092178280448_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=fu-5XHss7IYAX84MoD9&_nc_ht=scontent.fprg4-1.fna&oh=00_AT-T7n1WwNkEaW0Ko6LzrxI7XjCl7hp9egcMaS9mb21r8g&oe=6284928D"
                    alt="" width="64" height="64">
            </div>
            <div class="ml-5 col-lg-7">
                <h5>Tomáš Horák</h5>
                <span>Offline</span>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="las la-sms"></i></a>
            </div>
        </div>
    </div>
</div><?php }
}
