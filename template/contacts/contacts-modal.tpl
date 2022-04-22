<div class="modal fade" id="contact-add-modal" tabindex="-1" aria-labelledby="contact-add-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contact-add-modalLabel">Nový kontakt</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="/contacts" method="post">
                    <input type="hidden" name="type" value="add">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Jméno</label>
                        <input type="text" name="name" class="form-control" id="inputName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputSurname" class="form-label">Příjmení</label>
                        <input type="text" name="surname" class="form-control" id="inputSurname">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Telefonní číslo</label>
                        <input type="text" name="phone" class="form-control" id="inputPhone">
                    </div>
                    <div class="col-md-6">
                        <label for="inputNow" class="form-label">Co dělá</label>
                        <input type="text" name="now" class="form-control" id="inputNow">
                    </div>
                    <div class="col-md-6">
                        <label for="inputGoal" class="form-label">Kam míří</label>
                        <input type="text" name="goal" class="form-control" id="inputGoal">
                    </div>
                    <div class="col-md-6">
                        <label for="inputDo" class="form-label">Co dělá navíc</label>
                        <input type="text" name="do" class="form-control" id="inputDo">
                    </div>
                    <div class="col-md-6 d-flex align-items-end">
                        <div class="col-md-10">
                            <label for="inputState" class="form-label">Skupina</label>
                            <select id="inputState" class="form-select" name="group">
                                {foreach from=$contacts.groups item=group}
                                    <option value="{$group.id_contacts_category}">{$group.category_name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-md-2"
                            style="text-align: center;height: 38px; display: flex; align-items: center; justify-content: center;cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#group-add-modal">
                            <i class="las la-plus"></i>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Přidat kontakt</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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