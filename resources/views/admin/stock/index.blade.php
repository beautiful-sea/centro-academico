@extends('admin.boilerplate.page')

@section('header-title')
    <h1>Movimentações de estoque</h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item active">Movimentações</li>
@endsection

@section('content')
<div id="app">

<div class="my-2">

        <a href="{{ route('stocks.input') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Entrada</a>
        <a href="{{ route('stocks.output') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Saída</a>
   
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover" id="stock-list">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Em estoque</th>
                        <th>Mínimo</th>
                        <th class="text-center">Cor</th>
                        <th class="text-center">Tamanho</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stock as $s)
                        @if(isset($s->product))
                            @php
                                $class = '';
                                $class_danger = '';

                                if($s->amount <= $s->product->minimum_stock){
                                    $class_danger = 'bg-danger';
                                }
                            @endphp
                            <tr class="{{ $class }}">
                                <td><a href="/admin/products/{{$s->product->id}}/edit" >{{$s->product->name}}</a></td>
                                <td class=" text-center {{$class_danger}}">{{$s->amount}}</td>
                                <td class=" text-center {{$class_danger}}">{{$s->product->minimum_stock}}</td>
                                <td class=" text-center">{{$s->colors_id}}</td>
                                <td class=" text-center">{{$s->sizes_id}}</td>
                                <td>
                                    <div class="table-actions">
                                        <!-- @can('edit', $s)
                                            <a href="{{ route('stock.edit', ['stock' => $s]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                        @endcan -->

                                        <!-- 
                                        @can('destroy', $s)
                                                {{ Html::deleteLink('Excluir', route('users.destroy', ['user' => $s]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
                                        @endcan -->
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>


@stop

@section('js')
    <script>
        $('#stock-list').DataTable({
            'order':[[2,"asc"]]
        });
    </script>
@stop
