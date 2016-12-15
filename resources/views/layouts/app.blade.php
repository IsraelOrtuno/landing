<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@webartisans_es"/>
    <meta name="twitter:title" content="WebArtisans España • Participa en la primera coferencia"/>
    <meta name="twitter:description" content="La primera conferencia de Laravel + Vue.js en España #Alicante con"/>
    <meta name="twitter:image" content="https://webartisans.es/images/webatisans.png"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Ya se está trabajando para la primera conferencia de Laravel + Vue.js en España.">
    <title>{{ config('app.name', 'Web Artisans') }}</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @include('resources.analytics')
    <div id="app" v-scroll="onScroll">
        @include('common.navigation-bar')

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    <p>
                        <strong>WebArtisans <sup>TM</sup></strong> © 2016. Todos los derechos reservados.
                        Siguenos en Twitter <a href="https://twitter.com/webartisans_es">@webartisans_es</a>
                        o contacta con nosotros atraves de <a href="mailto:team@webartisans.es">team@webartisans.es</a>.
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
