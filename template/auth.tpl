{* <form action="/auth" method="post">
    <input type="hidden" name="type" value="register">
    <div class="mb-3">
        <label class="form-label">Jméno</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Příjmení</label>
        <input type="text" class="form-control" name="surname" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Emailová adresa</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Heslo</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label class="form-label">Heslo znovu</label>
        <input type="password" class="form-control" name="password_rep">
    </div>
    <div class="mb-3">
        <label class="form-label">Osobní VPA číslo</label>
        <input type="text" class="form-control" name="vpa_no">
    </div>
    <div class="mb-3">
        <label class="form-label">Kód pozvánky</label>
        <input type="text" class="form-control" name="invitation_no">
    </div>
    <button type="submit" class="btn btn-primary">Registrace</button>
</form> *}

<form action="/auth" method="post">
    <input type="hidden" name="type" value="login">
    <div class="mb-3">
        <label class="form-label">Emailová adresa</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Heslo</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Přihlášení</button>
</form>
