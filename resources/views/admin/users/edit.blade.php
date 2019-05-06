@extends('admin.boilerplate.page')

@section('header-title')
    <h1>
        Usuários
        <small>Editar</small>
    </h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuários</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
    @include('admin.users.form')
@stop