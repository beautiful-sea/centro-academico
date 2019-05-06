@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Produtos
        <small>Cadastrar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produtos</a></li>
    <li class="breadcrumb-item active">Cadastrar</li>
@endsection

@section('content')
    @include('admin.products.form')
@stop