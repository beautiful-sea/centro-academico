@extends('ca.layouts.page')


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

			<div class="carousel-item active" >
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<div class="carousel-caption">
								<h1 class="color-white no-mt mb-4 animated zoomInDown animation-delay-7">Conheça a história do Centro acadêmico</h1>
								<ul class="list-unstyled list-hero">
									<li><i class="animated flipInX animation-delay-6 color-success zmdi zmdi-spinner"></i>
										<span class="color-success animated fadeInRightTiny animation-delay-7">Lorem ipsum dolor sit amet consectetur</span></li>
										<li><i class="animated flipInX animation-delay-8 color-danger zmdi zmdi-cocktail"></i>
											<span class="color-danger animated fadeInRightTiny animation-delay-9">Lorem ipsum dolor sit amet consectetur</span></li>
											<li><i class="animated flipInX animation-delay-10 color-info zmdi zmdi-case"></i>
												<span class="color-info animated fadeInRightTiny animation-delay-11">Lorem
												ipsum dolor sit amet consectetur</span></li>
											</ul>
										</div>
									</div>
									<div class="col-xl-6 col-lg-5 d-none d-xs-block d-sm-block">
										<img src="{{asset('images/obrigado-baraozada.jpeg')}}" alt="..." class="img-fluid mt-6 center-block text-center animated zoomInRight animation-delay-5">
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="carousel-item ">
							<div class="container">
								<div class="row">
									<div class="col-xl-6 col-lg-7">
										<div class="carousel-caption">
											<h1 class="color-white no-mt mb-4 animated zoomInDown animation-delay-7">Lorem ipsum dolor sit amet consectetur</h1>
											<ul class="list-unstyled list-hero">
												<li><i class="animated flipInX animation-delay-8 color-info zmdi zmdi-nature"></i>
													<span class="color-info animated fadeInRightTiny animation-delay-9">Lorem ipsum dolor sit amet consectetur</span></li>
													<li><i class="animated flipInX animation-delay-6 color-danger zmdi zmdi-city-alt"></i>
														<span class="color-danger animated fadeInRightTiny animation-delay-7">Lorem ipsum dolor sit amet consectetur</span></li>
														<li><i class="animated flipInX animation-delay-10 color-warning zmdi zmdi-graduation-cap"></i>
															<span class="color-warning animated fadeInRightTiny animation-delay-11">Lorem
															ipsum dolor sit amet consectetur</span></li>
														</ul>
													</div>
												</div>
												<div class="col-xl-6 col-lg-5">
													<img src="{{asset('images/logos/institucional.png')}}" alt="..." class="img-fluid mt-6 center-block text-center animated zoomInDown animation-delay-5">
												</div>
											</div>
										</div>
									</div> -->
								</div>
								<!-- Controls -->
								<div class="d-none d-xs-block d-sm-block">
								<a href="#carousel-header" class=" btn-circle btn-circle-xs btn-circle-raised btn-circle-primary left carousel-control" role="button" data-slide="prev"><i class="zmdi zmdi-chevron-left"></i></a>
								<a href="#carousel-header" class=" btn-circle btn-circle-xs btn-circle-raised btn-circle-primary right carousel-control" role="button" data-slide="next"><i class="zmdi zmdi-chevron-right"></i></a>
								</div>
							</div>
						</header>


						<div class="container mt-6 ">
							<h2 class="color-bordo">Nossa História</h2>
							<div class="row">
								<div class="col-lg-6 text-justify">
									<p class="dropcaps"> @php echo isset($history_ca->text[0])?$history_ca->text[0]:'' @endphp</p>

								</div>
								<div class="col-lg-6 text-justify">
									<p> @php echo isset($history_ca->text[1])?$history_ca->text[1]:'' @endphp</p>
								</div>
							</div>
							<div class="owl-dots color"></div>
							<div class="owl-carousel owl-theme">


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
									<!-- <div class="wrap bg-bordo color-dark">

										<div class="container">
											<section class="mb-4">
												<div class="row">

												</section>

												<h1 class="color-white text-center mb-4">Dados</h1>
												<div class="row">
													<div class="col-xl-3 col-md-6">
														<div class="card card-royal card-body overflow-hidden text-center wow zoomInUp animation-delay-2">
															<h2 class="counter">  </h2>
															<i class="fas fa-4x fa-award color-royal"></i>
															<p class="mt-2 no-mb lead small-caps">prêmios ganhos</p>
														</div>
													</div>
													<div class="col-xl-3 col-md-6">
														<div class="card card-success card-body overflow-hidden text-center wow zoomInUp animation-delay-5">
															<h2 class="counter">  </h2>
															<i class="fas fa-4x fa-chess-queen color-success"></i>
															<p class="mt-2 no-mb lead small-caps">troféus</p>
														</div>
													</div>
													<div class="col-xl-3 col-md-6">
														<div class="card card-danger card-body overflow-hidden text-center wow zoomInUp animation-delay-4">
															<h2 class="counter">  </h2>
															<i class="fas fa-4x fa-medal color-danger"></i>
															<p class="mt-2 no-mb lead small-caps">Jogos vencidos</p>
														</div>
													</div>
													<div class="col-xl-3 col-md-6">
														<div class="card card-info card-body overflow-hidden text-center wow zoomInUp animation-delay-3">
															<h2 class="counter">  </h2>
															<i class="fa fa-4x fa-group color-info"></i>
															<p class="mt-2 no-mb lead small-caps">sócios</p>
														</div>
													</div>
												</div>
												<div class="text-center color-white mw-800 center-block mt-4">
													<p class="lead lead-lg">  </p>

												</div>
											</div>
										</div> -->
										<section class="mt-6">
											<div class="container">
												<h1 class="right-line">Últimas Fotos</h1>
												<div class="row">


													@foreach($last_photos_ca as $l)
													<div class="col-lg-4 col-md-6 col-sm-6 mb-4">
														<div class="ms-thumbnail-container wow fadeInUp">
															<figure style="height: 200px" class="ms-thumbnail ms-thumbnail-top ms-thumbnail-info">
																<img src="/files/last_photos_ca/{{$l->id}}.{{$l->extension_img}}" alt=""   style="height: 100%"  height='100%' class="img-fluid">
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

													<div class="col-lg-4 col-sm-12  offset-lg-4">
														<div class="price-table price-table-danger wow zoomInUp">
															<header class="price-table-header">
																<span class="price-table-category">SÓCIO</span>
																<h3><sup>R$</sup>6,70<sub>/mês.</sub></h3>
															</header>
															<div class="price-table-body">
																<p class="price-table-list">
																	Clube de vantagens em todo Brasil<hr style="margin: 0px">
																	Estabelecimentos parceiros exclusivos<hr style="margin: 0px"> 
																	Descontos em todos os produtos da Atlética<hr style="margin: 0px">
																	Benefícios na compra de produtos<hr style="margin: 0px">
																	Descontos em todas as festas da Atlética<hr style="margin: 0px">
																	Descontos nos campeonatos esportivos da Atlética<hr style="margin: 0px">
																	Vantagens dentro dos eventos da Atlética<hr style="margin: 0px">
																</p>
																<div class="text-center">
																	<a href="https://www.forsocios.com/engvassouras#main" class="btn btn-danger btn-raised">Quero ser sócio!</a>
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
												<h1 class="color-primary text-center" text-center>Representantes</h1>
												<div class="row">
													@foreach($team_ca as $t)
													<div class="col-lg-4 col-sm-6">
														<div class="card mt-4 card-danger wow zoomInUp animation-delay-7">
															<div class="ms-hero-bg-warning ms-hero-img-city">
																<img src="/files/team_ca/{{$t->id}}.{{$t->extension_img}}" alt="..."
																class="img-avatar-circle">
															</div>
															<div class="card-body pt-6 text-center">
																<h3 class="color-warning">{{$t->name}}</h3>
																<p>{{$t->description}}
																	<br>
																	@if($t->lattes)<a href="{{$t->lattes}}" target="_blank">Veja Mais</a>@endif
																</p>
																@if($t->linkedin)<a href="{{$t->linkedin}}" target="_blank"
																	class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
																	class="zmdi zmdi-linkedin"></i></a>@endif
																	@if($t->instagram)<a href="{{$t->instagram}}" target="_blank"
																		class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
																		class="zmdi zmdi-instagram"></i></a>@endif
																	</div>
																</div>
															</div>
															@endforeach
														</div>
													</div>

												</section>


												@endsection