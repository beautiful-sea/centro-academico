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

			<div class="carousel-item ">
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
										<img src="{{asset('images/logos/apontando.png')}}" alt="..." class="img-fluid mt-6 center-block text-center animated zoomInDown animation-delay-5">
									</div>
								</div>
							</div>
						</div>
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
													<img src="{{asset('images/logos/torcida.png')}}" style="width: 60%!important" alt="..." class="img-fluid mt-6 center-block text-center animated zoomInDown animation-delay-5">
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item ">
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
												<!-- Controls -->
												<div class="visible-md-up" style="visibility: hidden;">
													<a href="#carousel-header" class="hidden-sm hidden-xs btn-circle btn-circle-xs btn-circle-raised btn-circle-primary left carousel-control" role="button" data-slide="prev"><i class="zmdi zmdi-chevron-left"></i></a>
													<a href="#carousel-header" class="hidden-sm hidden-xs btn-circle btn-circle-xs btn-circle-raised btn-circle-primary right carousel-control" role="button" data-slide="next"><i class="zmdi zmdi-chevron-right"></i></a>
												</div>
											</div>
										</header>


										<div class="container mt-6 ">
											<h1 class="text-center color-bordo">Notícias</h1>
											<div class="owl-dots color"></div>
											<div class="owl-carousel owl-theme">

												@foreach($news_athletic as $n)
												<div class="card animation-delay-6">
													<div class="withripple zoom-img">
														<a href="javascript:void()"><img style="height: 257px!important" src="files/news_athletic/{{$n->id}}.{{$n->extension_img}}" alt="..." class="img-fluid"></a>
													</div>
													<div class="card-body">
														<h3 class="color-bordo">{{$n->title}}</h3>
														<p>{{$n->description}}</p>
														<p class="text-right">
															<a href="atletica/noticia/{{$n->id}}" class="btn btn-primary btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o" style="float: bottom"></i> Ler notícia</a>
														</p>
													</div>
												</div>
												@endforeach
											<!-- <div class="card card-dark-inverse animation-delay-8">
												<div class="withripple zoom-img">
													<a href="javascript:void()"><img src="files/news_athletic/1.jpg" alt="..." class="img-fluid"></a>
												</div>
												<div class="card-body">
													<h3 class="">Thumbnail label</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
													<p class="text-right">
														<a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
													</p>
												</div>
											</div> --><!-- 
											<div class="card card-dark-inverse animation-delay-8">
												<div class="withripple zoom-img">
													<a href="javascript:void()"><img src="files/news_athletic/1.jpg" alt="..." class="img-fluid"></a>
												</div>
												<div class="card-body">
													<h3 class="">Thumbnail label</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
													<p class="text-right">
														<a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
													</p>
												</div>
											</div> -->
										</div>
									</div>

									<div class="container">
									</div> <!-- container -->
									<div class="wrap bg-bordo color-dark">

										<div class="container">
											<section class="mb-4">
												<h2 class="color-white text-center mb-4 fadeInUp">Esportes</h2>
												<div class="row">

													@foreach($athletic_teams as $at)
													<div class="col-lg-4 col-md-6 col-sm-6 mb-2">
														<div class="ms-icon-feature wow flipInX animation-delay-4">
															<div class="ms-icon-feature-icon">
																<a href="{{($at->link == null)?'javascript:void(0)':$at->link}}"><span class="bg-white ms-icon ms-icon-lg ms-icon"><i class="{{$at->icon}} color-bordo"></i></span>
																</a></div>
																<div class="ms-icon-feature-content">
																	<h4 class="color-white">{{$at->name}}</h4>
																	<p class="color-white">{{$at->description}}</p>
																</div>
															</div>
														</div>
														@endforeach
													</section>

													<h1 class="color-white text-center mb-4">Dados</h1>
													<div class="row">
														<div class="col-xl-3 col-md-6">
															<div class="card card-royal card-body overflow-hidden text-center wow zoomInUp animation-delay-2">
																<h2 class="counter">{{$athletic_data->prizes}}</h2>
																<i class="fas fa-4x fa-award color-royal"></i>
																<p class="mt-2 no-mb lead small-caps">prêmios ganhos</p>
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="card card-success card-body overflow-hidden text-center wow zoomInUp animation-delay-5">
																<h2 class="counter">{{$athletic_data->trophies}}</h2>
																<i class="fas fa-4x fa-chess-queen color-success"></i>
																<p class="mt-2 no-mb lead small-caps">troféus</p>
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="card card-danger card-body overflow-hidden text-center wow zoomInUp animation-delay-4">
																<h2 class="counter">{{$athletic_data->games_won}}</h2>
																<i class="fas fa-4x fa-medal color-danger"></i>
																<p class="mt-2 no-mb lead small-caps">Jogos vencidos</p>
															</div>
														</div>
														<div class="col-xl-3 col-md-6">
															<div class="card card-info card-body overflow-hidden text-center wow zoomInUp animation-delay-3">
																<h2 class="counter">{{$athletic_data->partners}}</h2>
																<i class="fa fa-4x fa-group color-info"></i>
																<p class="mt-2 no-mb lead small-caps">sócios</p>
															</div>
														</div>
													</div>
													<div class="text-center color-white mw-800 center-block mt-4">
														<p class="lead lead-lg">{{$athletic_data->description}}</p>
														
													</div>
												</div>
											</div>
											<section class="mt-6">
												<div class="container">
													<h1 class="right-line">Últimas Fotos</h1>
													<div class="row">
														@foreach($last_photos_athletic as $l)
														<div class="col-lg-4 col-md-6 col-sm-6 mb-4">
															<div class="ms-thumbnail-container wow fadeInUp">
																<figure style="height: 200px" class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
																	<img src="/files/last_photos_athletic/{{$l->id}}.{{$l->extension_img}}" alt=""   style="height: 100%"  height='100%' class="img-fluid">
																	<figcaption  class="ms-thumbnail-caption text-center">
																		<div class="ms-thumbnail-caption-content" >
																			<h3 class="ms-thumbnail-caption-title">{{$l->name}}</h3>
																			<p>{{Str::limit($l->description,160,'...')}}</p>
																		</div>
																	</figcaption>
																</figure>
															</div>
														</div>
														@endforeach
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

														<div class="col-lg-6 col-xs-12 col-md-12 offset-lg-3">
															<div class="price-table price-table-danger wow zoomInUp">
																<header class="price-table-header">
																	<span class="price-table-category">SÓCIO</span>
																	<h3><sup>R$</sup>6,70<sub>/mês.</sub></h3>
																</header>

																<div class="price-table-body">
																	<ul class="price-table-list">
																		<li><i class="fa fa-check-circle"></i> Clube de vantagens em todo Brasil</li>
																		<li><i class="fa fa-check-circle"></i> Estabelecimentos parceiros exclusivos</li>
																		<li><i class="fa fa-check-circle"></i> Descontos em todos os produtos da Atlética</li>
																		<li><i class="fa fa-check-circle"></i> Descontos em todas as festas da Atlética</li>
																		<li><i class="fa fa-check-circle"></i> Descontos nos campeonatos esportivos da Atlética</li>
																		<li><i class="fa fa-check-circle"></i> Vantagens dentro dos eventos da Atlética</li>
																	</ul>
																	<div class="text-center">
																		<a href="https://www.forsocios.com/engvassouras#main" class="btn btn-danger btn-raised">Eu quero!</a>
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
																	<h3 class="color-danger">Fulano da Silva</h3>
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
																	<h3 class="color-info">Beltrano Fernandes</h3>
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
																	<h3 class="color-warning">Ciclano Cocheto</h3>
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