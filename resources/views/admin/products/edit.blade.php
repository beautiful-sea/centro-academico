@extends('admin.boilerplate.page')

	@section('header-title')
	<h1>
		Produtos
		<small>Editar</small>
	</h1>
	@stop

	@section('header-breadcrumbs')
	<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
	<li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produtos</a></li>
	<li class="breadcrumb-item active">Editar</li>
	@endsection
@section('content')
<div id="app">
	@include('admin.products.form')
</div>
@stop