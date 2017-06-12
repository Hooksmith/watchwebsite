
<!DOCTYPE html>
<html lang="{{ $lang=='kh'?'km-kh':'en-us' }}">
    <head>

        {{-- html5 and css3 for ie --}}
        @include('includes.utility.web-meta')

        {{-- html5 and css3 for ie --}}
        @include('includes.utility.ie-support')

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Hanuman|Roboto+Condensed:400" rel="stylesheet" type="text/css"> 

        @if(App::environment('local'))
            <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
			<link href="{{ asset('fonts/icomoon-front/style.css') }}" rel="stylesheet">
			

			<link href="{{ asset('vendors/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet">
			<link href="{{ asset('vendors/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet">

        @else
            <link href="{{ elixir('css/vendors_mix.css') }}" rel="stylesheet">
			<link href="{{ asset('fonts/icomoon-front/style.css') }}" rel="stylesheet">

            <link href="{{ elixir('css/style.css') }}" rel="stylesheet">
            {{-- <link href="{{ elixir('fonts/icomoon-front/style.css') }}" rel="stylesheet"> --}}
        @endif

        @section('scripts_top')

        @show 


    </head>

    <body class="no-underline-link no-outline lang_{{ $lang }}" ng-app="app">

        <div class="container" style="padding: 0;">
            @yield('content')
        </div>

        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCIAiZeLUQtHgd-a0lv9Q1MnDTUOfcLqIo'></script>

        @if(App::environment('local'))

            <script type="text/javascript" src="{{ asset('vendors/jquery/dist/jquery.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendors/jquery-ui/jquery-ui.min.js') }}"></script>

            <script type="text/javascript" src="{{ asset('vendors/angular/angular.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendors/angular-route/angular-route.js') }}"></script>  
            <script type="text/javascript" src="{{ asset('vendors/angular-messages/angular-messages.min.js') }}"></script>

            <script type="text/javascript" src="{{ asset('vendors/angular-facebook/lib/angular-facebook.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendors/underscore/underscore.js') }}"></script>

            <script type="text/javascript" src="{{ asset('vendors-download/ui-bootstrap/ui-bootstrap-custom-2.5.0.js') }}"></script>

            <script type="text/javascript" src="{{ asset('vendors/tether/dist/js/tether.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>

            {{-- <script type="text/javascript" src="{{ asset('vendors/vegas/dist/vegas.js') }}"></script> --}}

            <script type="text/javascript" src="{{ asset('vendors/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/directives/finished-render.js') }}"></script>

            <script type="text/javascript" src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>


            <script type="text/javascript" src="{{ asset('js/hh/app.js') }}"></script>

            <script type="text/javascript" src="{{ asset('js/libraries/crypt/aes.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/libraries/crypt/pbkdf2.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/libraries/jsencrypt.js') }}"></script>

            <script type="text/javascript" src="{{ asset('js/services/crypt.js') }}"></script>

            <script type="text/javascript" src="{{ asset('js/services/request.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/services/genfunc.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/services/hhModule.js') }}"></script>
  
            <script type="text/javascript" src="{{ asset('js/hh/watch.js') }}"></script>
        @else

            <script type="text/javascript" src="{{ elixir('js/build/hh-script.js') }}"  async="true"></script> 
            {{-- <script type="text/javascript" src="{{ asset('js/build-temp/hh-script.js') }}"></script> --}}


        @endif

        <!-- Go to www.addthis.com/dashboard to customize your tools --> 
        {{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5837f6675ae78e5d"></script>  --}}
        <script>
        
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', '{{ config('seo_config.analytics.google_analytic_id') }}', 'auto');
            ga('send', 'pageview');

        </script>

        @section('scripts')

        @show

    </body>


</html>
