@extends('admin.boilerplate.page')

<div id="app">
@section('header-title')
    <h1>
        Movimentações
        <small>Editar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('stock.index') }}">Movimentações</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection
</div>
@section('content')
    @include('admin.stock.form')
@stop