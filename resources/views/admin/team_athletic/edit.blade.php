@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Representantes
        <small>Editar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('team_ca.index') }}">Centro Acadêmico</a></li>
    <li class="breadcrumb-item"><a href="{{ route('team_ca.index') }}">Representantes</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
<div id="app">
    @include('admin.team_ca.form')
</div>
@stop