<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown CRM</title>
    {include file='../_partials/stylesheet.tpl'}
</head>

<body>
    <div id="main-w" class="d-flex">
        <div id="main-nav-w" class="col-lg-2 col-md-3">
            {include file="../_partials/nav.tpl"}
        </div>
        <div id="main-content-w" class="container col-lg-10">
            {include file="../$page_content"}
        </div>
    </div>
</body>

{include file="../_partials/javascript.tpl"}

</html>