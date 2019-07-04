@extends('atletica.layouts.page')


@section('content')

<div class="intro-full ms-hero-img-city2 ms-hero-bg-primary color-white" id="home">
	<div id="intro-video" class="plyr__video-embed">
		<iframe src="https://www.youtube.com/embed/bEfDl2UsXYM?modestbranding=1&loop=1&mute=1&playlist=bEfDl2UsXYM&autoplay=1&disablekb=1&controls=0&rel=0&showinfo=0" frameborder="0" ></iframe>
	</div>
	<div class="intro-full-content index-1">
		<div class="container">
			<div class="text-center mb-4">
				<h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Atlética<span>Vassouras</span></h1>
				<p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-600 animated fadeInUp animation-delay-7">A mudança não assegura necessariamente progresso, mas o progresso implacavelmente requer mudança</p>
			</div>
			<div class="text-center mb-2">
				<a id="go-intro-full-next" href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-white animated zoomInUp animation-delay-12"><i class="zmdi zmdi-long-arrow-down"></i></a>
			</div>
		</div>
	</div>
</div>


<div class="bg-light index-1 intro-full-next pt-6" >

	<div class="container" id="intro-next">
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
					<p class="color-bordo">{{$n->description}}</p>
					<p class="text-right">
						<a href="atletica/noticia/{{$n->id}}" class="btn btn-primary btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o" style="float: bottom"></i> Ler notícia</a>
					</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

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
							</a>
						</div>
						<div class="ms-icon-feature-content">
							<h4 class="color-white">{{$at->name}}</h4>
							<p class="color-white">{{$at->description}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
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
							<a href="https://www.forsocios.com/engvassouras#main" target="_blank" class="btn btn-danger btn-raised">Eu quero!</a>
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

			@foreach($team_athletic as $t)
			<div class="col-lg-4 col-sm-6">
				<div class="card mt-4 card-danger wow zoomInUp animation-delay-7">
					<div class="ms-hero-bg-warning ms-hero-img-city">
						<img src="/files/team_athletic/{{$t->id}}.{{$t->extension_img}}" alt="..."
						class="img-avatar-circle">
					</div>
					<div class="card-body pt-6 text-center">
						<h3 class="color-warning">{{$t->name}}</h3>
						<p>{{$t->description}}
							<br>
							@if($t->lattes)<a href="{{$t->lattes}}" target="_blank">Veja Mais</a>
							@endif
						</p>
						@if($t->linkedin)
						<a href="{{$t->linkedin}}" target="_blank"
							class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook"><i
							class="zmdi zmdi-linkedin"></i>
						</a>
						@endif
						@if($t->instagram)
						<a href="{{$t->instagram}}" target="_blank"
							class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram"><i
							class="zmdi zmdi-instagram"></i>
						</a>
						@endif
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>

@endsection