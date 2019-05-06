@extends('atletica.layouts.page')


@section('content')

<header class="ms-hero ms-hero-black mb-6">
			<div id="carousel-header" class="carousel carousel-header slide" data-ride="carousel" data-interval="5000">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-header" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-header" data-slide-to="1"></li>
					<li data-target="#carousel-header" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="container">
							<div class="row">
								<div class="col-xl-6 col-lg-7">
									<div class="carousel-caption">
										<h1 class="color-white no-mt mb-4 animated zoomInDown animation-delay-7">Venha
											fazer parte da nossa Atlética!</h1>
										<ul class="list-unstyled list-hero">
											<li><i class="animated flipInX animation-delay-6 color-warning zmdi zmdi-cloud"></i>
												<span class="color-warning animated fadeInRightTiny animation-delay-7">Exclusivo
													para Alunos da Universidade</span></li>
											<li><i class="animated flipInX animation-delay-8 color-info zmdi zmdi-globe"></i>
												<span class="color-info animated fadeInRightTiny animation-delay-9">Participamos
													de Competições Globais</span></li>
											<li><i class="animated flipInX animation-delay-10 color-success zmdi zmdi-download"></i>
												<span class="color-success animated fadeInRightTiny animation-delay-11">Lorem
													ipsum dolor sit amet consectetur</span></li>
										</ul>
										<div class="text-center">
											<a href="#" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16">Me
												Inscrever</a>

										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-5">
									<img src="{{asset('images/logos/baroes.jpeg')}}" alt="..." class="img-fluid mt-6 center-block text-center animated zoomInDown animation-delay-5">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-xl-6 col-lg-7">
									<div class="carousel-caption">
										<h1 class="color-white no-mt mb-4 animated zoomInDown animation-delay-7">At the
											Vanguard of Innovation</h1>
										<ul class="list-unstyled list-hero">
											<li><i class="animated flipInX animation-delay-6 color-success zmdi zmdi-spinner"></i>
												<span class="color-success animated fadeInRightTiny animation-delay-7">High-speed
													servers and performance</span></li>
											<li><i class="animated flipInX animation-delay-8 color-danger zmdi zmdi-cocktail"></i>
												<span class="color-danger animated fadeInRightTiny animation-delay-9">Global
													web solutions &amp; cloud computing</span></li>
											<li><i class="animated flipInX animation-delay-10 color-info zmdi zmdi-case"></i>
												<span class="color-info animated fadeInRightTiny animation-delay-11">Lorem
													ipsum dolor sit amet consectetur</span></li>
										</ul>
										<div class="text-center">
											<a href="#" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16"><i class="zmdi zmdi-settings"></i> Personalize</a>
											<a href="#" class="btn btn-warning btn-xlg btn-raised animated flipInX animation-delay-18"><i class="zmdi zmdi-download"></i> Download</a>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-5">
									<img src="{{asset('images/obrigado-baraozada.jpeg')}}" alt="..." class="img-fluid mt-6 center-block text-center animated zoomInRight animation-delay-5">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container">
							<div class="row">
								<div class="col-xl-6 col-lg-7">
									<div class="carousel-caption">
										<h1 class="color-white no-mt mb-4 animated zoomInDown animation-delay-7">At the
											Vanguard of Innovation</h1>
										<ul class="list-unstyled list-hero">
											<li><i class="animated flipInX animation-delay-8 color-info zmdi zmdi-nature"></i>
												<span class="color-info animated fadeInRightTiny animation-delay-9">Global
													web solutions &amp; cloud computing</span></li>
											<li><i class="animated flipInX animation-delay-6 color-danger zmdi zmdi-city-alt"></i>
												<span class="color-danger animated fadeInRightTiny animation-delay-7">High-speed
													servers and performance</span></li>
											<li><i class="animated flipInX animation-delay-10 color-warning zmdi zmdi-graduation-cap"></i>
												<span class="color-warning animated fadeInRightTiny animation-delay-11">Lorem
													ipsum dolor sit amet consectetur</span></li>
										</ul>
										<div class="text-center">
											<a href="#" class="btn btn-primary btn-xlg btn-raised animated flipInX animation-delay-16"><i class="zmdi zmdi-settings"></i> Personalize</a>
											<a href="#" class="btn btn-warning btn-xlg btn-raised animated flipInX animation-delay-18"><i class="zmdi zmdi-download"></i> Download</a>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-5">
									<img src="{{asset('images/logos/logo-baroes.jpeg')}}" alt="..." class="img-fluid mt-6 center-block text-center animated zoomInDown animation-delay-5">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Controls -->
				<a href="#carousel-header" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary left carousel-control" role="button" data-slide="prev"><i class="zmdi zmdi-chevron-left"></i></a>
				<a href="#carousel-header" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary right carousel-control" role="button" data-slide="next"><i class="zmdi zmdi-chevron-right"></i></a>
			</div>
		</header>
		<div class="container">
			<section class="mb-4">
				<h2 class="text-center no-mt mb-6 wow fadeInUp">Nossos Times</h2>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 mb-2">
						<div class="ms-icon-feature wow flipInX animation-delay-4">
							<div class="ms-icon-feature-icon">
								<a href=""><span class="ms-icon ms-icon-lg ms-icon"><i class="fas fa-futbol"></i></span>
								</a></div>
							<div class="ms-icon-feature-content">
								<h4 class="color-bordo">Futebol</h4>
								<p>Futebol masculino.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mb-2">
						<div class="ms-icon-feature wow flipInX animation-delay-4">
							<div class="ms-icon-feature-icon">
								<a href=""><span class="ms-icon ms-icon-lg ms-icon"><i class="far fa-futbol"></i></span>
								</a></div>
							<div class="ms-icon-feature-content">
								<h4 class="color-bordo">Futsal</h4>
								<p>Futsal feminino e masculino.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mb-2">
						<div class="ms-icon-feature wow flipInX animation-delay-4">
							<div class="ms-icon-feature-icon">
								<a href=""><span class="ms-icon ms-icon-lg ms-icon"><i class="fas fa-basketball-ball"></i></span>
								</a></div>
							<div class="ms-icon-feature-content">
								<h4 class="color-bordo">Basquete</h4>
								<p>Basquete feminino e masculino.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mb-2">
						<div class="ms-icon-feature wow flipInX animation-delay-4">
							<div class="ms-icon-feature-icon">
								<a href=""><span class="ms-icon ms-icon-lg ms-icon"><i class="fas fa-baseball-ball"></i></span>
								</a></div>
							<div class="ms-icon-feature-content">
								<h4 class="color-bordo">Handebol</h4>
								<p>Handebol feminino e masculino.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 mb-2">
						<div class="ms-icon-feature wow flipInX animation-delay-4">
							<div class="ms-icon-feature-icon">
								<a href="/esportes/volei.html"><span class="ms-icon ms-icon-lg ms-icon"><i class="fas fa-volleyball-ball"></i></span></a>
							</div>
							<div class="ms-icon-feature-content">
								<h4 class="color-bordo">Vôlei</h4>
								<p>Vôlei feminino e masculino.</p>
							</div>
						</div>
					</div>
					<!-- <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
						<div class="ms-icon-feature wow flipInX animation-delay-4">
							<div class="ms-icon-feature-icon">
								<span class="ms-icon ms-icon-lg ms-icon"><i class="fa fa-send"></i></span>
							</div>
							<div class="ms-icon-feature-content">
								<h4 class="color-bordo">Customer service</h4>
								<p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in
									similique, necessitatibus odit vero sunt.</p>
							</div>
						</div>
					</div>
				</div> -->
			</section>
		</div> <!-- container -->
		<div class="wrap bg-bordo color-dark">
			<div class="container">
				<h1 class="color-white text-center mb-4">Dados</h1>
				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="card card-royal card-body overflow-hidden text-center wow zoomInUp animation-delay-2">
							<h2 class="counter">450</h2>
							<i class="fas fa-4x fa-award color-royal"></i>
							<p class="mt-2 no-mb lead small-caps">prêmios ganhos</p>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card card-success card-body overflow-hidden text-center wow zoomInUp animation-delay-5">
							<h2 class="counter">64</h2>
							<i class="fas fa-4x fa-chess-queen color-success"></i>
							<p class="mt-2 no-mb lead small-caps">troféus</p>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card card-danger card-body overflow-hidden text-center wow zoomInUp animation-delay-4">
							<h2 class="counter">600</h2>
							<i class="fas fa-4x fa-medal color-danger"></i>
							<p class="mt-2 no-mb lead small-caps">Jogos vencidos</p>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card card-info card-body overflow-hidden text-center wow zoomInUp animation-delay-3">
							<h2 class="counter">3500</h2>
							<i class="fa fa-4x fa-group color-info"></i>
							<p class="mt-2 no-mb lead small-caps">sócios</p>
						</div>
					</div>
				</div>
				<div class="text-center color-white mw-800 center-block mt-4">
					<p class="lead lead-lg">Discover our projects and the rigorous process of creation. Our principles
						are creativity, design, experience and knowledge. We are backed by 20 years of research.</p>
					<a href="javascript:void(0)" class="btn btn-raised btn-white color-bordo wow flipInX animation-delay-8"><i class=""></i>
						Tenho um Projeto</a>
				</div>
			</div>
		</div>
		<section class="mt-6">
			<div class="container">
				<h1 class="right-line">Últimas Fotos</h1>
				<div class="row">


				</div>
			</div>
		</section>
		<div class="wrap ms-hero-img-airplane ms-hero-bg-royal ms-bg-fixed">
			<div class="container">
				<div class="text-center mb-4">
					<h2 class="uppercase color-white">Seja sócio </h2>
					<p class="lead uppercase color-light">Venha fazer parte da atlética e aproveitar os benefícios</p>
				</div>
				<div class="row no-gutters">

					<div class="col-lg-4 offset-4">
						<div class="price-table price-table-danger wow zoomInUp">
							<header class="price-table-header">
								<span class="price-table-category">SÓCIO</span>
								<h3><sup>$</sup>6,70<sub>/mês.</sub></h3>
							</header>
							<div class="price-table-body">
								<p class="price-table-list">
									Clube de vantagens em todo Brasil
									Estabelecimentos parceiros exclusivos
									Descontos em todos os produtos da Atlética
									Benefícios na compra de produtos
									Descontos em todas as festas da Atlética
									Descontos nos campeonatos esportivos da Atlética
									Vantagens dentro dos eventos da Atlética
								</p>
								<div class="text-center">
									<a href="https://www.forsocios.com/engvassouras#main" class="btn btn-danger btn-raised"><i class="glyphicon glyphicon-euro"></i>Eu quero!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--container -->
		</div>
		<section class="mt-6">
			<div class="container">
				<h1 class="color-primary text-center" text-center>Nossa Equipe</h1>
				<div class="row d-flex justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="card mt-4 card-danger wow zoomInUp">
							<div class="ms-hero-bg-danger ms-hero-img-city">
								<img src="{{asset('images/demo/avatar1.jpg')}}" alt="..." class="img-avatar-circle">
							</div>
							<div class="card-body pt-6 text-center">
								<h3 class="color-danger">Victoria Smith</h3>
								<p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse
									voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i class="zmdi zmdi-facebook"></i></a>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i class="zmdi zmdi-twitter"></i></a>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i class="zmdi zmdi-instagram"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card mt-4 card-info wow zoomInUp">
							<div class="ms-hero-bg-info ms-hero-img-city">
								<img src="{{asset('images/demo/avatar2.jpg')}}" alt="..." class="img-avatar-circle">
							</div>
							<div class="card-body pt-6 text-center">
								<h3 class="color-info">Charlie Durant</h3>
								<p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse
									voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i class="zmdi zmdi-facebook"></i></a>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i class="zmdi zmdi-twitter"></i></a>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i class="zmdi zmdi-instagram"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="card mt-4 card-warning wow zoomInUp">
							<div class="ms-hero-bg-warning ms-hero-img-city">
								<img src="{{asset('images/demo/avatar3.jpg')}}" alt="..." class="img-avatar-circle">
							</div>
							<div class="card-body pt-6 text-center">
								<h3 class="color-warning">Joan Fawert</h3>
								<p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse
									voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i class="zmdi zmdi-facebook"></i></a>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter"><i class="zmdi zmdi-twitter"></i></a>
								<a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i class="zmdi zmdi-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection