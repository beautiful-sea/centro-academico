@extends('admin.boilerplate.page')

@section('header-title')
<h1>Representantes</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item active">Centro Acadêmico</li>
<li class="breadcrumb-item active">Representantes</li>
@endsection

@section('content')
<div id="app">

    <div class="my-2">

        <a href="{{ route('team_ca.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Representante</a>
        
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover" id="minutes-list">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($team_ca as $p)

                        <tr class="">
                            <td>{{$p->name}}</td>
                            <td>{{$p->description}}</td>
                            <td>
                                <div class="table-actions">
                                    @can('edit', $p)
                                        <a href="{{ route('team_ca.edit', ['team_ca' => $p]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                    @endcan

                                    @can('destroy', $p)
                                            {{ Html::deleteLink('Excluir', route('team_ca.destroy', ['team_ca' => $p]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
    $('#minutes-list').DataTable({
        'order':[[2,"asc"]],
        responsive:true
    });
</script>
@stop
