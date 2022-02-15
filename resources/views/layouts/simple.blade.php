<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Empregos para Sabatistas</title>
        <meta name="description" content="Trabalhando e guardando o sábado">
        <meta name="author" content="Allan Ramos(@allangrds)">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

        <link href="/css/app.css" rel="stylesheet" />
    </head>
    <body>
        @include('layouts.simple_header')

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </body>
</html>
