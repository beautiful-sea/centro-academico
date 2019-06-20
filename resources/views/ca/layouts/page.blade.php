@extends('ca.layouts.master')


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
  <div class="ms-site-container ms-nav-fixed">
    <nav class="navbar navbar-expand-md navbar-fixed ms-lead-navbar navbar-mode navbar-mode mb-0" id="navbar-lead">
      <div class="container container-full">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
            <!-- <img src="{{asset('/img/demo/logo-navbar.png" alt=""> -->
            <span class="ms-logo ms-logo-white ms-logo-sm">C. A.</span>
            <span class="ms-title">Centro<strong>Acadêmico</strong></span>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a data-scroll class="nav-link active" href="../index.html">Home</a></li>
            <li class="nav-item"><a data-scroll class="nav-link" href="#services">Serviços</a></li>
            <li class="nav-item"><a data-scroll class="nav-link" href="#portfolio">Portfolio</a></li>
            <!-- <li class="nav-item"><a data-scroll class="nav-link" href="#pricing">Pricing</a></li> -->
            <li class="nav-item"><a data-scroll class="nav-link" href="#about">Sobre Nós</a></li>
            <li class="nav-item"><a data-scroll class="nav-link" href="#team">Equipe</a></li>
            <li class="nav-item dropdown">
              <a href="../index.html" class="nav-link dropdown-toggle animated fadeIn animation-delay-8"
                data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                data-name="portfolio">Engenharias <i class="zmdi zmdi-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item"
                    href="https://universidadedevassouras.edu.br/graduacao/engenhariasoftware"><i
                      class="zmdi zmdi-devices"></i> Engenharia de Software</a></li>
                <li><a class="dropdown-item" href="https://universidadedevassouras.edu.br/graduacao/engenhariacivil"><i
                      class="zmdi zmdi-city-alt"></i>Engenharia Civil</a></li>
                <li><a class="dropdown-item"
                    href="https://universidadedevassouras.edu.br/graduacao/engenhariaproducao"><i
                      class="zmdi zmdi-assignment-o"></i> Engenharia de Produção</a></li>
                <li><a class="dropdown-item"
                    href="https://universidadedevassouras.edu.br/graduacao/engenhariaquimica"><i
                      class="zmdi zmdi-gradient"></i> Engenharia Química</a></li>
                <li><a class="dropdown-item"
                    href="https://universidadedevassouras.edu.br/graduacao/engenhariaeletrica"><i
                      class="zmdi zmdi-flash"></i>Engenharia Elétrica</a></li>
              </ul>
            </li>
            <li class="nav-item"><a data-scroll class="nav-link" href="#contact">Contato</a></li>
          </ul>
        </div> <!-- navbar-collapse collapse -->
        <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="zmdi zmdi-menu"></i></a>
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