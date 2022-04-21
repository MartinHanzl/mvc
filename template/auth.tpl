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
    {* {block name="register-form"}
        {include file="../template/auth/register-form.tpl"}
    {/block}*}
    <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-modalLabel">Přihlášení</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {block name="login-form"}
                        {include file="../template/auth/login-form.tpl"}
                    {/block}
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
                    {block name="register-form"}
                        {include file="../template/auth/register-form.tpl"}
                    {/block}
                </div>
            </div>
        </div>
    </div>
</div>