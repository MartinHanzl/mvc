<div class="col-12 p-3">
    <table class="table table-hover" id="contact-table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">#</th>
                <th scope="col">Jméno</th>
                <th scope="col">Příjmení</th>
                <th scope="col">Telefon</th>
                <th scope="col">Email</th>
                <th scope="col">Skupina</th>
                <th scope="col">Co dělá</th>
                <th scope="col">Kam míří</th>
                <th scope="col">Co dělá navíc</th>
            </tr>
        </thead>
        <tbody>
            {if $contacts}
                {foreach from=$contacts.contacts item=contact key=key}
                    <tr data-bs-toggle="modal" data-bs-target="#contact-update-modal" data-contact-name="{$contact.name}"
                        data-contact-surname="{$contact.surname}" data-contact-phone="{$contact.phone}"
                        data-contact-email="{$contact.email}" data-contact-now="{$contact.now}"
                        data-contact-goal="{$contact.goal}" data-contact-do="{$contact.do}" data-contact-id="{$contact.id_contacts_info}">
                        <td>
                            <form action="/contacts" method="post">
                                <input type="hidden" name="type" value="delete-contact">
                                <input type="hidden" name="cid" value="{$contact.id_contacts_info}">
                                <button type="submit" style="border: none;background:transparent;"><i
                                        class="las la-trash"></i></button>
                            </form>
                        </td>
                        <th scope="row">{$key+1}</th>
                        <td>
                            {$contact.name}</td>
                        <td>{$contact.surname}</td>
                        <td><a href="tel:000{$contact.phone}" target="_blank">{$contact.phone}</a></td>
                        <td><a href="mailto:{$contact.email}" target="_blank">{$contact.email}</a></td>
                        <td><span class="badge"
                                style="background-color: {$contact.category_color};">{$contact.category_name}</span></td>
                        <td>{$contact.now}</td>
                        <td>{$contact.goal}</td>
                        <td>{$contact.do}</td>
                    </tr>
                {/foreach}
                {* {include file="template/contacts/contact-update-modal.tpl"} *}
            {/if}
        </tbody>
    </table>
</div>