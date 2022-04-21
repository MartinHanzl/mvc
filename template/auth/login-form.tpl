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