<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>ZVAPP</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/vue-style.css') }}" type="text/css">
	<script type="text/javascript">
		window.zvapp_server_data = "{!! addslashes(json_encode($data)) !!}";
		window.csrf_token = "{{ csrf_token() }}";
	</script>
</head>

<body>

	<div id="app">
	</div>

	<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>