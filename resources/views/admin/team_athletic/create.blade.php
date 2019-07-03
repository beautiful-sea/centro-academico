@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Representantes
        <small>Cadastrar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('team_athletic.index') }}">Atlética</a></li>
    <li class="breadcrumb-item"><a href="{{ route('team_athletic.index') }}">Representantes</a></li>
    <li class="breadcrumb-item active">Cadastrar</li>
@endsection

@section('content')
<div id="app">
    @include('admin.team_athletic.form')
</div>
@stop