<div class="col-lg-12 col-xs-12 col-12 block-single p-3 mb-4">
    <div class="block-header p-1 mb-3 d-flex align-items-center">
        <div class="col-md-7">
            <h3>Přehled kontaktů</h3>
        </div>
        <div class="col-md-5 d-flex justify-content-end align-items-center">
            <div class="block-functions-single col-lg-2 col-xs-4 col-12 d-flex justify-content-center align-items-center ms-3 p-3" data-bs-toggle="modal"
                data-bs-target="#contact-add-modal">
                <i class="las la-plus"></i>
            </div>

            <div class="block-functions-single col-lg-2 col-xs-4 col-12 d-flex justify-content-center align-items-center ms-3 p-3" data-bs-toggle="modal"
                data-bs-target="#groups-modal">
                <i class="las la-edit"></i>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-12 d-flex">
        {foreach from=$contacts.data.number item=data}
            <div class="col-md-2">
                <p>Počet kontaktů: <strong class="badge bg-secondary">{$data.numberOfContact}</strong></p>
            </div>
        {/foreach}
        {foreach from=$contacts.data.now item=data}
            <div class="col-md-2">
                <p>Víte co dělá: <strong class="badge bg-secondary">{$data.number}</strong></p>
            </div>
        {/foreach}
        {foreach from=$contacts.data.goal item=data}
            <div class="col-md-2">
                <p>Víte kam míří: <strong class="badge bg-secondary">{$data.goalNumber}</strong></p>
            </div>
        {/foreach}
        {foreach from=$contacts.data.do item=data}
            <div class="col-md-2">
                <p>Víte co dělá navíc: <strong class="badge bg-secondary">{$data.doNumber}</strong></p>
            </div>
        {/foreach}
    </div>
</div>