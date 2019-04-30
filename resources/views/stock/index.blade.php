@extends('boilerplate.page')

@section('header-title')
    <h1>Movimentações de estoque</h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Movimentações</li>
@endsection

@section('content')
<div id="app">

<div class="my-2">
        @can('create', \App\Stock::class)
            <a href="{{ route('stocks.input') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Entrada</a>
            <a href="{{ route('stocks.output') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Saída</a>
        @endcan
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover" id="stock-list">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Em estoque</th>
                        <th>Mínimo</th>
                        <th>Valor de Venda</th>
                        <th>Ultima atualização</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stock as $s)
                        @php
                            $class = '';
                            $class_minimum = '';

                            if($s->amount <= $s->product[0]->minimum_stock){
                                $class_minimum = 'bg-danger';
                            }
                        @endphp
                        <tr class="{{ $class }}">
                            <td><a href="/products/{{$s->product[0]->id}}/edit" >{{$s->product[0]->name}}</a></td>
                            <td class="number-mask">{{$s->amount}}</td>
                            <td class="number-mask {{$class_minimum}}">{{$s->product[0]->minimum_stock}}</td>
                            <td class="money-mask">{{$s->unitary_value}}</td>
                            <td class="">{{date("d/m/Y h:m:i",strtoTime($s->updated_at))}}</td>
                            <td>
                                <div class="table-actions">
                                    @can('edit', $s)
                                        <a href="{{ route('users.edit', ['user' => $s]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                    @endcan


                                    @can('destroy', $s)
                                            {{ Html::deleteLink('Excluir', route('users.destroy', ['user' => $s]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
        $('#stock-list').DataTable();
    </script>
@stop
