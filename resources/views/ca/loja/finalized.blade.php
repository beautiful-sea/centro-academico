@extends('atletica.layouts.page')


@section('content')
<div id="app">

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="color-primary text-center">Pedido realizado com sucesso!</h1>

				<div class="card animated fadeInUp animation-delay-7 color-primary withripple">
					<div class="card-body-big color-dark">
						<div class="text-center">
							<i class="fa fa-check-circle color-success" style="font-size: 80px"></i>
							<!-- <h2>Dados para retirada dos produtos:</h2> -->
							<p class="lead">Em breve você receberá um e-mail no endereço cadastrado com todos os detalhes do pedido.
							</p>
							<p class="lead">
								<u class="color-danger">Obs:</u>O prazo de retirada dos produtos é de até 15 dias úteis.
							</p>
							<a href="/atletica" class="btn btn-primary btn-raised"><i class="zmdi zmdi-home"></i> 
							Início</a>
						</div>
					</div>
					<div class="ripple-container"></div>
				</div>
			</div>

		</div>
	</div> <!-- container -->
</div>
@endsection
