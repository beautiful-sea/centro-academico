@extends('admin.boilerplate.page')

<div id="app">
@section('header-title')
    <h1>
        Pedidos
        <small>Detalhes</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Pedidos</a></li>
    <li class="breadcrumb-item active">Detalhes</li>
@endsection
</div>
@section('content')
    @include('admin.orders.details')
@stop