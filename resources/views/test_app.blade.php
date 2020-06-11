<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>ZVAPP</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/vue-style.css') }}" type="text/css">
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
	<script type="text/javascript">
		window.zvapp_server_data = "{!! addslashes(json_encode($data)) !!}";
		window.csrf_token = "{{ csrf_token() }}";
	</script>

	{{-- <script src="https://use.typekit.net/nlq1kdt.js"></script> --}}
	{{-- <script>
		try {
			Typekit.load({
				async: true
			});
		} catch (e) {}
	</script> --}}
</head>

<body>

	<div id="app">
	</div>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bideo.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/typekit.js') }}"></script>
</body>

</html>
