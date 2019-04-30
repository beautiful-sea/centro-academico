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
    <div class="row">
       <box-info number="{{count($users)}}" description="Usuários Cadastrados" action="Mais informações" link="users" color="warning" icon="fa fa-user">
       </box-info>
       <box-info number="{{count($products)}}" description="Produtos Cadastrados" action="Mais informações" link="products" color="info" icon="fab fa-product-hunt">
       </box-info>
       <box-info number="{{count($output_products)}}" description="Vendas" action="Mais informações" link="stock" color="success" icon="fa fa-shopping-cart">
       </box-info> 
   </div>
   <div class="row">
        <div class="col-md-6 col-6">
            <table-responsive title="Ultimas Vendas" txt_btn_footer="Ver todos" :items="{{$output_products}}"></table-responsive>
        </div>
    </div>
@stop

@section('js')
{{-- Seus scripts específicos de página aqui --}}
@endsection