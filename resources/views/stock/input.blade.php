@extends('boilerplate.page')

@section('header-title')
    <h1>Movimentações de estoque
		<small>Entrada</small>
    </h1>	
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/stock">Movimentações</a></li>
    <li class="breadcrumb-item active">Nova Entrada</li>
@endsection

@section('content')
<div id="app">

@include('stock.form')

</div>


@stop

@section('js')
    <script>
    </script>
@stop
