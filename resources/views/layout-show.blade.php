<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>@yield ('title')</title>
</head>
<div class="sidenav">
    <a class="{{Request::is('/') ? 'current_page_item' : ''}}" href="/">Terug naar hoofdpagina</a>
    <a class="{{Request::is('/')}}" href="/articles">Alle artikelen</a>

</div>

<body>
@yield ('content')
</body>

</html>