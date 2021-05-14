<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | PRACRITI 2.0 IITD</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//webanalytics.iitd.ac.in/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '8']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Code -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap"
      rel="stylesheet"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('iitd_logo.png') }}" rel="shortcut icon" type="image/png">
    <style type="text/css">
        @font-face {
            font-family: 'Samarkan Normal';
            font-style: normal;
            font-weight: normal;
            src: url("{{URL::asset('SAMARN__.woff')}}");
        }
    </style>
</head>
<body>
    
    <header class="p-1 text-white justify-content-center" style="background-color: #c21717;">
        <div class="d-flex justify-content-center align-items-center">
            <a target="_blank" href="http://iitd.ac.in/">
                <img class="m-2" style="width: 50px; height: 50px;" src="{{URL::asset('iitd_logo.png')}}" alt="IITD" id="iitd-logo" />
            </a>
            <div class="m-2" style="font-family: 'Samarkan Normal', 'Samarkan', sans-serif;"><h1>PRACRITI 2.0</h1></div>        
        </div>
        
    </header>
     
    
    <nav class="navbar navbar-expand pb-0">
        @yield('logged')
    </nav>
    
    <nav class="navbar navbar-expand">
         @yield('nav')
    </nav>
    

    <main>
        @yield('content')
    </main>

    <footer class="page-footer font-small text-white pt-4" style="background-color: #c21717; bottom:0;">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">PRACRITI 2.0 | IIT Delhi</h5>
                    <p>If you have any queries, comments or suggestions, please write to pracriti@iitd.ac.in with subject line "PRACRITI: Query". We, at PRACRITI, are working hard to provide the best projections to join the fight against COVID19. We request you to participate in making this initiative better––if you notice any discrepancy either in the data or projections, please do let us know so that we can correct it appropriately.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <div class="badge badge-light" id="google_translate_element"></div>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="{{url('/resources')}}">Resources</a></li>
                        <li><a class="text-white" href="{{url('/prediction')}}">Prediction</a></li>
                        <li><a class="text-white" href="{{url('/resources/helplines')}}">Helplines</a></li>
                        <li><a class="text-white" href="{{url('/about')}}">About</a></li>
                        <li><a class="text-white" href="{{url('/internal')}}">Internal</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">
            © 2021 Copyright: <a href="http://iitd.ac.in/">IIT Delhi</a>
        </div>
    </footer>
</body>
</html>
