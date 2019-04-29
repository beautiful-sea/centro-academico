@extends('boilerplate.page')

@section('css')
    {{-- Seus estilos específicos de página aqui --}}
@endsection

@section('header-title')
    <h1>Bem-vindo</h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <div id='app'>
    	<example-component texto = 'testetete' titulo="Teste de Componente">
    		<slot></slot>
    	</example-component> 	
    </div>
@stop

@section('js')
    {{-- Seus scripts específicos de página aqui --}}
@endsection