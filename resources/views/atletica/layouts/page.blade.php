@extends('atletica.layouts.master')


@section('before_content')
<div id="ms-preload" class="ms-preload">
	<div id="status">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
</div>
@endsection

@section('body')

<div class="ms-site-container">
	<!-- Modal -->
	<div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog animated zoomIn animated-3x" role="document">
			<div class="modal-content">
				<div class="modal-header d-block shadow-2dp no-pb">
					<button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
					<div class="modal-title text-center">
						<span class="ms-logo ms-logo-white ms-logo-sm mr-1">AV</span>
						<h3 class="no-m ms-site-title">Atlética <span>Vassouras</span></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<header class="ms-header ms-header-dark">

	<!--ms-header-dark-->
	<div class="container container-full">
		<div class="ms-title">
			<a href="/">
				<!-- <img src="../assets/img/demo/logo-header.png" alt=""> -->
				<img src="{{asset('images/logos/rostobarao.png')}}" style="width: 50px">
				<h1 class="animated fadeInRight animation-delay-6">Atlética <span>Vassouras</span></h1>
			</a>
		</div>

		<div class="header-right" style="float:left;">
			<div class="share-menu">
				<ul class="share-menu-list">
					<li class="animated fadeInRight animation-delay-3"><a href="/" class="color-white">Voltar para Engenharias</a></li>
				</ul>
				<a href="/" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7"><i class="fa fa-hand-point-left"></i></a>
			</div>
		</div>
	</div>
</header>
<nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-white">
	<div class="container container-full">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">
				<!-- <img src="../assets/img/demo/logo-navbar.png" alt=""> -->
				<img src="{{asset('images/logos/rostobarao.png')}}" style="width: 50px">
				<span class="ms-title">Atlética <strong>Vassouras</strong></span>
			</a>
		</div>
		<div class="collapse navbar-collapse" id="ms-navbar">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a href="{{route('atletica.home')}}" class="nav-link  animated fadeIn animation-delay-7">Home </a>
				</li>

				<li class="nav-item">
					<a href="{{route('atletica.loja')}}" class="nav-link animated fadeIn animation-delay-9" role="button">Vitrine Online</a>
				</li>

				<li class="nav-item">
					<a href="/" class="nav-link animated fadeIn animation-delay-9" role="button">

					</a>
				</li>
			</ul>
		</div>
	</div> <!-- container -->
</nav>
@yield('content')
@endsection

@section('footer')

<footer class="ms-footer">
	<div class="container">
		<p>Copyright &copy; E-Point 2019</p>
	</div>
</footer>

@endsection
