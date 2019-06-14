@extends('admin.boilerplate.page')

@section('css')
{{-- Seus estilos específicos de página aqui --}}
@endsection

@section('header-title')
<h1>Bem-vindo</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="/admin">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div id='app'>

  <!-- Box's de Informações gerais do painel -->
  <div class="row">
   <box-info number="{{count($users)}}" description="Usuários Cadastrados" action="Mais informações" link="admin/users" color="warning" icon="fa fa-user">
   </box-info>
   <box-info number="{{count($products)}}" description="Produtos Cadastrados" action="Mais informações" link="admin/products" color="info" icon="fab fa-product-hunt">
   </box-info>
   <box-info number="{{count($ordersThisMonth)}}" description="Vendas esses mês" action="Mais informações" link="admin/stock" color="success" icon="fa fa-shopping-cart">
   </box-info>
   <box-info number="{{count($bellowStock)}}" description="Produtos com estoque baixo" action="Mais informações" link="admin/stock" color="danger" icon="fa fa-exclamation-triangle">
   </box-info>
 </div>

<div class="row" style="">
  <!-- Chart de produtos mais vendidos -->
  @if(count($bestSellers) >= 3)
    <div class="col-md-4 col-4">
      <chart-pie :items="{{json_encode($bestSellers)}}"></chart-pie>
    </div>
  @endif

  <!-- Lista de ultimos produtos cadastrados -->
    @if(count($products) >= 4)
    <div class="col-md-5"> 
      <recently-added-products title="Ultimos produtos adicionados" :items="{{$products}}" footer="Ver todos produtos" footer_link="admin/products" :limit="4"
      ></recently-added-products>
    </div>
    @endif

  <!-- Tabelas de movimentação do estoque -->
    @if(count($last_outputs) >= 3)
    <div class="col-md-4 col-4">
      <table-responsive title="Ultimas Saídas" txt_btn_footer="Ver todos" :items="{{$last_outputs}}" link_btn_footer="admin/stock" :limit="5"></table-responsive>
    </div>
    @endif

    @if(count($last_inputs) >= 3)
    <div class="col-md-4 col-4">
      <table-responsive title="Ultimas Entradas" txt_btn_footer="Ver todos" :items="{{$last_inputs}}" :limit="5" link_btn_footer="admin/stock"></table-responsive>
    </div>
    @endif
  </div>
</div>
@stop

@section('js')
<script>

</script>
  @endsection