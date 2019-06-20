@extends('admin.boilerplate.page')

@section('header-title')
<h1>Pedidos</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item active">Vendas</li>
<li class="breadcrumb-item active">Pedidos</li>
@endsection

@section('content')
<div id="app">

    <div class="my-2">

        <!-- <a href="{{ route('stocks.input') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Entrada</a>
        <a href="{{ route('stocks.output') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Saída</a> -->

    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover" id="order-list">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Email</th>
                        <th>Produtos</th>
                        <th>Data da Compra</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $s)
                <tr class="">
                    <td>{{$s->customer_name}}</td>
                    <td class="">{{$s->customer_email}}</td>
                    <td class="">{{count($s->items)}}</td>
                    <td class="">{{date('d/m/Y d:h',strtotime($s->created_at))}}</td>
                        <td>
                            <div class="table-actions">
                                        @can('show', $s)
                                            <a href="{{ route('orders.show', ['order' => $s]) }}" class="btn btn-info btn-sm"><i class="fa fa-list"></i> Detalhes</a>
                                            @endcan

                                        
                                        @can('destroy', $s)
                                                {{ Html::deleteLink('Excluir', route('orders.destroy', ['order' => $s]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>


                @stop

                @section('js')
                <script>
                    $('#order-list').DataTable({
                        'order':[[2,"asc"]]
                    });
                </script>
                @stop
