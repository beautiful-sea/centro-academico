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


  <!-- Lista de ultimos produtos cadastrados -->
  @if(count($products) >= 4)
  <div class="col-md-5"> 
    <recently-added-products title="Ultimos produtos adicionados" :items="{{$products}}" footer="Ver todos produtos" footer_link="admin/products" :limit="4"
    ></recently-added-products>
  </div>
  @endif

  <!-- Tabelas de movimentação do estoque -->
  @if(count($last_outputs) >= 3)
  <div class="col-md-6 col-6">
    <table-responsive title="Ultimas Saídas" txt_btn_footer="Ver todos" :items="{{$last_outputs}}" link_btn_footer="admin/stock" :limit="5"></table-responsive>
  </div>
  @endif

  @if(count($last_inputs) >= 3)
  <div class="col-md-6 col-6">
    <table-responsive title="Ultimas Entradas" txt_btn_footer="Ver todos" :items="{{$last_inputs}}" :limit="5" link_btn_footer="admin/stock"></table-responsive>
  </div>
  @endif
   <box-info number="R$ {{$profit}},00" description="Lucro no mês atual" action="Mais informações" link="admin/stock" color="success" icon="fa fa-money-bill">
   </box-info>
  <!-- Chart de vendas no ano -->
  <div class="container">
    <div class="card">
      <div class="card-body">
        <canvas id="bar-chart-horizontal" width="800" height="450"></canvas>
      </div>
    </div>
  </div>

  <!-- Chart de produtos mais vendidos -->
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="alert alert-info" id="alert-best_sellers"><i class="fa fa-exclamation-circle"></i> É necessário a venda de no mínimo 4 produtos diferentes para ver o relatório de produtos mais vendidos.</div>
        <canvas id="pie-chart" width="1200" height="450"></canvas>
      </div>
    </div>
  </div>
</div>
</div>
@stop

@section('js')
<script>
  var getSalesInYear = function() {
    let sales = '';
    $.ajax({
      url : "admin/orders/salesinyear",
      method:'GET',
      async: false,
      success: function(data){
        sales = data;
      }
    });
    return sales;

  };

  var salesInYear = getSalesInYear();

  new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
      datasets: [
      {
        label: "Vendas no mês",
        backgroundColor: ['burlywood','indigo','crimson','mediumvioletred','maroon','coral','dimgrey','red','yellow','green','pink','blue'],
        data: salesInYear
      }
      ]
    },
    options: {
      scales: {
        xAxes: [{
          barPercentage: 1,
          barThickness: 6,
          maxBarThickness: 8,
          minBarLength: 2,
          gridLines: {
            offsetGridLines: true
          }
        }]
      },
      legend: { display: false },
      title: {
        display: true,
        text: 'Vendas no ano de '+ new Date().getFullYear()
      }
    }
  });


  var getBestSellers = function() {
    let sales = '';
    $.ajax({
      url : "admin/orders/bestsellers",
      method:'GET',
      async: false,
      success: function(data){
        sales = data;
      }
    });
    return sales;

  };

  let best_sellers = getBestSellers();
  if(best_sellers[4]){
    $('#alert-best_sellers').css('display','none');
    new Chart(document.getElementById("pie-chart"), {
      type: 'pie',
      data: {
        labels: [best_sellers[1][0].product.name,best_sellers[2][0].product.name,best_sellers[3][0].product.name,best_sellers[4][0].product.name,],
        datasets: [{
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [best_sellers[1].length,best_sellers[2].length,best_sellers[3].length,best_sellers[4].length]
        }]
      },
      options: {
        title: {
          display: true,
          text: 'Produtos mais vendidos'
        }
      }
    });
  }else{
    $('#pie-chart').css('height','0');
  }
</script>
@endsection