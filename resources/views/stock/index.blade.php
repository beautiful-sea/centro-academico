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
            <table class="table table-hover" id="users-list">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor de Venda</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stock as $s)
                        @php
                            $class = '';
                        @endphp

                        <tr class="{{ $class }}">
                            <td>{{$s->id_product}}</td>
                            <td class="number-mask">{{$s->amount}}</td>
                            <td class="money-mask">{{$s->unitary_value}}</td>
                            <td class="money-mask">{{$s->unitary_value}}</td>
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
    </script>
@stop
