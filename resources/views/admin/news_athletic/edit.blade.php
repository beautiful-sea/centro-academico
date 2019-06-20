@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Notícias
        <small>Editar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('news_athletic.index') }}">Atlética</a></li>
    <li class="breadcrumb-item active">Notícias</li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
<div id="app">
    @include('admin.news_athletic.form')
</div>
@stop