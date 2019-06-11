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
            <table class="table table-hover" id="minutes-list">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Início</th>
                        <th>Termino</th>
                        <th>Assuntos</th>
                        <th>Participantes</th>
                        <th class="text-center">Documento</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($minutes as $p)

                        <tr class="">
                            <td>{{ date("d/m/Y", strtotime($p->date)) }}</td>
                            <td>{{ $p->start_time }}</td>
                            <td>{{ $p->end_time }}</td>
                            <td>
                                @php
                                    foreach($p->schedules as $s){
                                        echo ' <span class="badge badge-primary" style="margin-right: 5px;font-size: 13px"> '. $s->subject .' </span>';
                                    }
                                @endphp
                            </td>
                            <td>
                                @php
                                    foreach($p->participants as $s){
                                        echo '<span class="badge badge-primary" style="margin-right: 5px;font-size: 13px"> ' .$s->name. ' </span>';
                                    }
                                @endphp
                            </td>
                            <td ><a href="/files/atas/{{$p->id}}.pdf" target="_blank"><button class="btn btn-info">Visualizar PDF</button></a></td>
                            <td>
                                <div class="table-actions">
                                    @can('edit', $p)
                                        <a href="{{ route('minutes.edit', ['minute' => $p]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                    @endcan

                                    @can('destroy', $p)
                                            {{ Html::deleteLink('Excluir', route('minutes.destroy', ['minute' => $p]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
