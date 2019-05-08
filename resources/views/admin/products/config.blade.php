@extends('admin.boilerplate.page')

@section('header-title')
<h1>
    Produtos
    <small>Configurações</small>
</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produtos</a></li>
<li class="breadcrumb-item active">Configurações</li>
@endsection

@section('content')
<div id="app">
    <div class="col-md-6">
        <form-options-product></form-options-product>
    </div>
</div>
@stop