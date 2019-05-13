@extends('admin.boilerplate.page')

@section('header-title')
    <h1>Produtos</h1>
@stop

@section('header-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
    <li class="breadcrumb-item active">Produtos</li>
@endsection

@section('content')
<div id="app">
    <div class="my-2">
        @can('create', \App\User::class)
            <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Produto</a>
        @endcan
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover" id="products-list">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $p)
                        @php
                            $class = '';

                            if ($p->locked) {
                                $class = 'text-muted';
                            }
                        @endphp

                        <tr class="{{ $class }}">
                            <td>{{ $p->name }}</td>
                            <td>{{ Str::limit($p->description,60,'...') }}</td>
                            <td>
                                <div class="table-actions">
                                    @can('edit', $p)
                                        <a href="{{ route('products.edit', ['product' => $p]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                    @endcan

                                    @if (!$p->locked)
                                        @can('block', $p)
                                                <a href="{{ route('products.block', ['product' => $p]) }}" class="btn btn-danger btn-sm confirmable"><i class="fa fa-lock"></i> Bloquear</a>
                                        @endcan
                                    @else
                                        @can('unblock', $p)
                                                <a href="{{ route('products.unblock', ['product' => $p]) }}" class="btn btn-success btn-sm confirmable"><i class="fa fa-lock-open"></i> Desbloquear</a>
                                        @endcan
                                    @endif<!-- 

                                    @can('destroy', $p)
                                            {{ Html::deleteLink('Excluir', route('products.destroy', ['product' => $p]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
                                    @endcan -->
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
        $('#products-list').DataTable({
        });
    </script>
@stop
