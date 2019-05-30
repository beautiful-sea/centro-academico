@extends('admin.boilerplate.page')

	@section('header-title')
	<h1>
		Opções de Produtos
		<small>Editar</small>
	</h1>
	@stop

	@section('header-breadcrumbs')
	<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
	<li class="breadcrumb-item"><a href="{{ route('products.config') }}">Configurar Produtos</a></li>
	<li class="breadcrumb-item active">Editar Cor</li>
	@endsection
@section('content')
<div id="app">
	@include('admin.products.form-color')
</div>
@stop