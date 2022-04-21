<form action="/auth" method="post">
    <input type="hidden" name="type" value="register">
    <div class="mb-3">
        <label class="form-label">Jméno *</label>
        <input type="text" class="form-control" name="name" required placeholder="např: Jakub">
    </div>
    <div class="mb-3">
        <label class="form-label">Příjmení *</label>
        <input type="text" class="form-control" name="surname" required placeholder="např: Nejezchleb">
    </div>
    <div class="mb-3">
        <label class="form-label">Emailová adresa *</label>
        <input type="email" class="form-control" name="email" required placeholder="např: bez.chleba@seznam.cz">
    </div>
    <div class="mb-3">
        <label class="form-label">Heslo *</label>
        <input type="password" class="form-control" name="password" required placeholder="např: ********">
    </div>
    <div class="mb-3">
        <label class="form-label">Heslo znovu *</label>
        <input type="password" class="form-control" name="password_rep" required placeholder="např: ********">
    </div>
    <div class="mb-3">
        <label class="form-label">Osobní VPA číslo *</label>
        <input type="text" class="form-control" name="vpa_no" required placeholder="např: 8295632">
    </div>
    <div class="mb-3">
        <label class="form-label">Kód pozvánky *</label>
        <input type="text" class="form-control" name="invitation_no" required placeholder="např: 1234567890">
    </div>
    <button type="submit" class="btn btn-primary">Registrace</button>
</form>