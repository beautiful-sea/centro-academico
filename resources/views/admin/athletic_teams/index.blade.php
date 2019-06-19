@extends('admin.boilerplate.page')

@section('header-title')
<h1>Esportes</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item active">Atlética</li>
<li class="breadcrumb-item active">Times</li>
@endsection

@section('content')
<div id="app">

    <div class="my-2">

        <a href="{{ route('athletic_teams.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Esporte</a>
        
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover" id="teams-list">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Ícone</th>
                        <th>Link</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($athletic_teams as $p)

                        <tr class="">
                            <td>{{$p->name}}</td>
                            <td>{{$p->description}}</td>
                            <td><i class="{{$p->icon}}">  </i></td>
                            <td>{{$p->link}}</td>
                            <td>
                                <div class="table-actions">
                                    @can('edit', $p)
                                        <a href="{{ route('athletic_teams.edit', ['athletic_teams' => $p]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                    @endcan

                                    @can('destroy', $p)
                                            {{ Html::deleteLink('Excluir', route('athletic_teams.destroy', ['athletic_teams' => $p]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
    $('#teams-list').DataTable({
        'order':[[2,"asc"]],
        responsive:true
    });
</script>
@stop
