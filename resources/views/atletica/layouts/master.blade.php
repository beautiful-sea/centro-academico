<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="theme-color" content="#333">
	<title>Atlética Vassouras</title>
	<meta name="description" content="Material Style Theme">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon" href="{{asset('images/favicon.png?v=3')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="{{asset('css/preload.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/plugins.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.bordo.min.css')}}">
	<!--[if lt IE 9]>
				<script src="../assets/js/html5shiv.min.js"></script>
				<script src="../assets/js/respond.min.js"></script>
			<![endif]-->
</head>

<body>
  @yield('before_content')
  @yield('body')

  <script src="{{ asset('js/plugins.min.js') }}"></script>
  <script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>