<div class="col-12 p-3">
    <table class="table table-hover" id="contact-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jméno</th>
                <th scope="col">Příjmení</th>
                <th scope="col">Telefon</th>
                <th scope="col">Email</th>
                {* <th scope="col">Skupina</th> *}
                <th scope="col">Co dělá</th>
                <th scope="col">Kam míří</th>
                <th scope="col">Co dělá navíc</th>
            </tr>
        </thead>
        <tbody>
            {if $contacts}
                {foreach from=$contacts.contacts item=contact}
                    <tr>
                        <th scope="row">{$contact.id_contacts_info}</th>
                        <td>{$contact.name}</td>
                        <td>{$contact.surname}</td>
                        <td><a href="tel:000{$contact.phone}" target="_blank">{$contact.phone}</a></td>
                        <td><a href="mailto:{$contact.email}" target="_blank">{$contact.email}</a></td>
                        {* <td>xxx</td> *}
                        <td>{$contact.now}</td>
                        <td>{$contact.goal}</td>
                        <td>{$contact.do}</td>
                    </tr>
                {/foreach}
            {/if}
        </tbody>
    </table>
</div>