@extends('admin.boilerplate.page')

@section('header-title')
    <h1>Movimentações de estoque
		<small>Saída</small>
    </h1>	
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('stock.index') }}">Movimentações</a></li>
    <li class="breadcrumb-item active">Nova Saída</li>
@endsection

@section('content')
	@include('admin.stock.form')
@stop

@section('js')
    <script>
    </script>
@stop
