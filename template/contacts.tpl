<div id="contacts-w">
    <div class="d-flex col-lg-12 col-12">
        {block name='functions'}
            {include file="template/contacts/contacts-header.tpl"}
            {include file="template/contacts/contacts-modal.tpl"}
            {include file="template/contacts/groups-modal.tpl"}
            {include file="template/contacts/group-add-modal.tpl"}
            {include file="template/contacts/contact-update-modal.tpl"}
        {/block}
    </div>
    <div class="d-flex col-lg-12 col-12 block-single">
        {block name='functions'}
            {include file="template/contacts/contacts-table.tpl"}
        {/block}
    </div>
</div>
<br>