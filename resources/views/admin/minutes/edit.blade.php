@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Reuniões
        <small>Editar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('minutes.index') }}">Reuniões</a></li>
    <li class="breadcrumb-item active">Cadastrar</li>
@endsection

@section('content')
<div id="app">
    @include('admin.minutes.form')
</div>
@stop