@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Fotos
        <small>Cadastrar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('news_athletic.index') }}">Centro Acadêmico</a></li>
    <li class="breadcrumb-item active">Fotos</li>
    <li class="breadcrumb-item active">Cadastrar</li>
@endsection

@section('content')
<div id="app">
    @include('admin.last_photos_ca.form')
</div>
@stop