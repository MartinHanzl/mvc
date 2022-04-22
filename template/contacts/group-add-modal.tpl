<div class="modal fade" id="group-add-modal" tabindex="-1" aria-labelledby="group-add-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="group-add-modalLabel">Nový kontakt</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    data-bs-toggle="modal" data-bs-target="#contact-add-modal"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="/contacts" method="post">
                    <input type="hidden" name="type" value="group">
                    <div class="col-md-12">
                        <label for="inputName" class="form-label">Název skupiny</label>
                        <input type="text" name="title" class="form-control" id="inputName">
                    </div>
                    <div class="col-md-12">
                        <label for="inputName" class="form-label">Barevné označení</label>
                        <input type="color" name="color" class="form-control" id="inputName">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Přidat skupinu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>