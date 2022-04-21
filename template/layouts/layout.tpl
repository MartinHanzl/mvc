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
        <div id="main-nav-w" class="col-xs-12 col-lg-2 col-md-12 col-12 nav-hidden">
            <div class="mobile-nav-toggle d-flex justify-content-center p-3 align-items-center hidden-md">
                <i id="mobile-nav-toggle" class="las la-angle-up"></i>
            </div>
            {include file="../_partials/nav.tpl"}
        </div>
        <div id="main-content-w" class="container col-xs-12 col-lg-10 col-12 ">
            {include file="../$page_content"}
        </div>
    </div>
</body>

{include file="../_partials/javascript.tpl"}

</html>