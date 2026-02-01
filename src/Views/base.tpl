<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/build/app.css" type="text/css" />
    <title>Document</title>
</head>
<body class="d-flex flex-column">
    {include file="components/header.tpl"}

    <div class="container">
        {block name=body}{/block}
    </div>

    {include file="components/footer.tpl"}
</body>
</html>