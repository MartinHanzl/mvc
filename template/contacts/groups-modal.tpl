<div class="modal fade" id="groups-modal" tabindex="-1" aria-labelledby="groups-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="groups-modalLabel">Správa skupin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {if $contacts.groups}
                    {foreach from=$contacts.groups item=$group}
                        <form action="/contacts" method="post" class="row g-3 mb-3">
                            <input type="hidden" name="type" value="edit-group">
                            <input type="hidden" name="groupId" value="{$group.id_contacts_category}">
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control" id="inputName"
                                    value="{$group.category_name}">
                            </div>
                            <div class="col-md-2">
                                <input type="color" name="color" class="form-control form-control-color" id="inputSurname"
                                    value="{$group.category_color}">
                            </div>
                            <div class="col-4" style="text-align: right;">
                                <button type="submit" class="btn btn-primary" name="group-save">Uložit</button>
                                <button type="submit" class="btn btn-danger" name="group-delete">Smazat</button>
                            </div>
                        </form>
                    {/foreach}
                    <div class="col-md-12" data-bs-toggle="modal" data-bs-target="#group-add-modal">
                        <span class="btn btn-secondary"><i class="las la-plus"></i> <span>Přidat skupinu</span></span>
                    </div>
                {/if}
            </div>
        </div>
    </div>
</div>