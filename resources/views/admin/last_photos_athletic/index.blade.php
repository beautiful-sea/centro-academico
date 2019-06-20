@extends('admin.boilerplate.page')

@section('header-title')
<h1>Fotos</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item active">Atlética</li>
<li class="breadcrumb-item active">Fotos</li>
@endsection

@section('content')
<div id="app">

    <div class="my-2">

        <a href="{{ route('last_photos_athletic.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Foto</a>
        
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover" id="last_photos_athletic-list">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Data</th>
                        <th>Imagem</th>
                        <th data-orderable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($last_photos_athletic as $p)
                        <tr class="">
                            <td>{{$p->name}}</td>
                            <td>{{Str::limit($p->description,60,'...')}}</td>
                            <td>{{date('d/m/Y',strtotime($p->created_at))}}</td>
                            <td><img src="/files/last_photos_athletic/{{$p->id}}.{{$p->extension_img}}" width="200px"></td>
                            <td>
                                <div class="table-actions">
                                    @can('edit', $p)
                                        <a href="{{ route('last_photos_athletic.edit', ['last_photos_athletic' => $p]) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                    @endcan

                                    @can('destroy', $p)
                                            {{ Html::deleteLink('Excluir', route('last_photos_athletic.destroy', ['last_photos_athletic' => $p]), ['button_class' => 'btn btn-danger btn-sm confirmable', 'icon' => 'trash']) }}
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
    $('#last_photos_athletic-list').DataTable({
        'order':[[2,"asc"]],
        responsive:true
    });
</script>
@stop
