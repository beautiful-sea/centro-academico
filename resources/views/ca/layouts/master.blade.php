<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="theme-color" content="#333">
	<title>Centro Acadêmico</title>
	<meta name="description" content="Material Style Theme">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
			@yield('footer')

			<script src="{{ asset('js/app.js') }}" ></script>
			<script src="{{ asset('js/plugins.min.js') }}"></script>
			<script src="{{ asset('js/app.min.js') }}" ></script>
			<script src="{{ asset('js/index.js') }}"></script>
			<!--Start of Tawk.to Script-->
			<script type="text/javascript">
				var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
				(function(){
					var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
					s1.async=true;
					s1.src='https://embed.tawk.to/5d1677d222d70e36c2a34b65/default';
					s1.charset='UTF-8';
					s1.setAttribute('crossorigin','*');
					s0.parentNode.insertBefore(s1,s0);
				})();
			</script>
			<!--End of Tawk.to Script-->

		</body>

		</html>