@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Fotos
        <small>Editar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('last_photos_athletic.index') }}">Atlética</a></li>
    <li class="breadcrumb-item active">Fotos</li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
<div id="app">
    @include('admin.last_photos_athletic.form')
</div>
@stop