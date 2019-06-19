@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Esportes
        <small>Editar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('athletic_teams.index') }}">Atlética</a></li>
    <li class="breadcrumb-item"><a href="{{ route('athletic_teams.index') }}">Esportes</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
<div id="app">
    @include('admin.athletic_teams.form')
</div>
@stop