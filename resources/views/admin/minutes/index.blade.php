@extends('admin.boilerplate.page')

@section('header-title')
<h1>Registro de Reuniões</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item active">Reuniões</li>
@endsection

@section('content')
<div id="app">

    <div class="my-2">

        <a href="{{ route('minutes.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Reunião</a>
        
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover" id="stock-list">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Em estoque</th>
                        <th>Mínimo</th>
                        <th class="text-center">Ultima atualização</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                  
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
