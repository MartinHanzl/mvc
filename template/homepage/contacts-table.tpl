<div class="col-xs-12 col-md-12 col-lg-12 col-12 block-single p-3 mb-4">
    <div class="block-header p-1 mb-3">
        <h3>Seznam kontaktů</h3>
    </div>
    <div class="mb-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jméno</th>
                    <th scope="col">Příjmení</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Skupina</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$home.contact item=contact key=key}
                    <tr>
                        <th scope="row">{$key+1}</th>
                        <td>{$contact.name}</td>
                        <td>{$contact.surname}</td>
                        <td><a href="tel:000420{$contact.phone}" target="_blank">{$contact.phone}</a></td>
                        <td><span class="badge" style="background-color: {$contact.category_color};">{$contact.category_name}</span></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>