<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript">
        window.csrf_token = "{{ csrf_token() }}";
    </script>

    <script src="https://use.typekit.net/nlq1kdt.js"></script>

    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>

</head>
<body>
    <div id="app">
        <div>
            this is vue.js app
        </div>
    </div>


    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('/js/manifest.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('/js/vendor.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/bideo.js') }}" defer></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>
