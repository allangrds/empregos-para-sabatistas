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

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-96YJKJ2K5T"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-96YJKJ2K5T');
        </script>

        @yield('head')
    </head>
    <body>
        @include('layouts.simple_header')

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')

        <script src="/js/app.js"></script>
    </body>
</html>
