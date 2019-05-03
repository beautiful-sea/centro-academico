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

  <!-- Box's de Informações gerais do painel -->
  <div class="row">
   <box-info number="{{count($users)}}" description="Usuários Cadastrados" action="Mais informações" link="users" color="warning" icon="fa fa-user">
   </box-info>
   <box-info number="{{count($products)}}" description="Produtos Cadastrados" action="Mais informações" link="products" color="info" icon="fab fa-product-hunt">
   </box-info>
   <box-info number="{{count($output_products)}}" description="Vendas" action="Mais informações" link="stock" color="success" icon="fa fa-shopping-cart">
   </box-info>
   <box-info number="{{count($bellowStock)}}" description="Produtos com estoque baixo" action="Mais informações" link="stock" color="danger" icon="fa fa-shopping-cart">
   </box-info>
 </div>

<!-- Chart de produtos mais vendidos -->
 <div class="row">
  <div class="col-md-6 col-12">
    <chart-pie :items="{{json_encode($bestSellers)}}"></chart-pie>
  </div>
</div>

<!-- Tabelas de movimentação do estoque -->
 <div class="row">
  <div class="col-md-12 col-12">
    <table-responsive title="Ultimas Saídas" txt_btn_footer="Ver todos" :items="{{$last_outputs}}" link_btn_footer="/stock" :limit="5"></table-responsive>
  </div>
  <div class="col-md-12 col-12">
    <table-responsive title="Ultimas Entradas" txt_btn_footer="Ver todos" :items="{{$last_inputs}}" :limit="5" link_btn_footer="/stock"></table-responsive>
  </div>
</div>
</div>
@stop

@section('js')
<script>

</script>
  @endsection