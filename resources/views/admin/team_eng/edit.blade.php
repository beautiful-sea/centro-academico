@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Coordenadores
        <small>Editar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('team_eng.index') }}">Engenharias</a></li>
    <li class="breadcrumb-item"><a href="{{ route('team_eng.index') }}">Coordenadores</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
<div id="app">
    @include('admin.team_eng.form')
</div>
@stop