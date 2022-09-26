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
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <link href="/css/app.css" rel="stylesheet" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-96YJKJ2K5T"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-96YJKJ2K5T');
        </script>

        <!-- LiveSession.io code -->
        <script type="text/javascript">
            window['__ls_namespace'] = '__ls';
            window['__ls_script_url'] = 'https://cdn.livesession.io/track.js';
            !function(w, d, t, u, n) {
                if (n in w) {if(w.console && w.console.log) { w.console.log('LiveSession namespace conflict. Please set window["__ls_namespace"].');} return;}
                if (w[n]) return; var f = w[n] = function() { f.push ? f.push.apply(f, arguments) : f.store.push(arguments)};
                if (!w[n]) w[n] = f; f.store = []; f.v = "1.1";

                var ls = d.createElement(t); ls.async = true; ls.src = u;
                var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(ls, s);
            }(window, document, 'script', window['__ls_script_url'], window['__ls_namespace']);

            __ls("init", "77860b66.2b97993d", { keystrokes: false });
            __ls("newPageView");
        </script>
        <!-- END LiveSession.io code -->

        @yield('head')
    </head>
    <body>
        @include('layouts.simple_header')

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')

        @yield('scripts')
        <script src="/js/app.js"></script>
    </body>
</html>
