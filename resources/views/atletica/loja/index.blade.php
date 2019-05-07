@extends('atletica.layouts.page')


@section('content')
<div id="app">
	<!-- Modal Product -->
	<div class="modal modal-primary" id="modalProduct" tabindex="-1" role="dialog" aria-labelledby="modalProduct">
		<div class="modal-dialog animated zoomIn animated-3x" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title color-primary" id="modalProduct">Modal title</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="button" class="btn  btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<shopping-cart></shopping-cart>
	<div class="ms-hero-page ms-hero-img-city2 ms-hero-bg-info mb-6">
		<div class="text-center color-white mt-6 mb-6 index-1">
			<h1>Vitrine Online </h1>
			<p class="lead lead-lg">Bem vindo a nossa vitrine online. Veja nossos produtos e aproveite para reservar o seu!
				<br> Obtenha descontos sendo sócio da Atlética.
			</p>
			<a href="javascript:void(0)" class="btn btn-raised btn-white color-danger">
			tornar-se Sócio</a>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="card card-bordo">
					<div class="card-header">
						<h3 class="card-title">Filtro</h3>
					</div>
					<div class="card-body">
						<form class="form-horizontal" id="Filters">
							<h4 class="mb-1 no-mt">Vestimenta</h4>
							<fieldset>
								<div class="form-group no-mt">
									<div class="checkbox">
										<label>
											<input type="checkbox" value=".calca"> Calça 
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value=".bermuda"> Bermuda 
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" value=".casaco"> Casaco 
										</label>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<h4 class="mb-1">Outros</h4>
								<div class="form-group no-mt">
									<div class="checkbox">
										<label>
											<input type="checkbox" value=".caneca"> Caneca 
										</label>
									</div>
								</div>
							</fieldset>
							<button class="btn btn-danger btn-block no-mb mt-2" id="Reset"><i class="zmdi zmdi-delete"></i> Limpar
							Filtros</button>
						</form>
						<form class="form-horizontal">
							<h4>Ordenar por</h4>
							<div class="form-group">
								<select id="SortSelect" class="form-control selectpicker" data-dropup-auto="false">
									<option value="random">Populares</option>
									<option value="price:asc">Maior preço</option>
									<option value="price:desc">Menor preço</option>
								</select>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="row" id="Container">
					<box-product :items="{{json_encode(\App\Product::productsInStock())}}"></box-product>
				</div>
			</div>

		</div>
	</div> <!-- container -->
</div>
@endsection