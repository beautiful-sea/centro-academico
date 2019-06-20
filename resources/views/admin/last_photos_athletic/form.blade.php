{{ Form::restForm($last_photos_athletic, ['id' => 'last_photos_athletic-form','files' => true,'route_prefix' => 'last_photos_athletic']) }}
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="created_at">Data</label>
                    <input id="created_at" class="form-control" name="created_at" type="date" value="{{date('d-m-y',strtotime($last_photos_athletic->created_at))}}" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Título</label>
                    <input id="name" class="form-control" name="name" type="text" value="{{$last_photos_athletic->name}}" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="description">Breve descrição</label>
                    <input id="description" maxlength="180" class="form-control" name="description" type="text" value="{{$last_photos_athletic->description}}" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Foto</label><small> </small>
                    <input type="file" name="photo" class="form-control" >
                </div>
            </div>
        </div>
        @if($last_photos_athletic->extension_img)
        <img src="/files/last_photos_athletic/{{$last_photos_athletic->id}}.{{$last_photos_athletic->extension_img}}" width="200px">
        @endif
    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#last_photos_athletic-form').validate({
        rules: {
            'created_at':'required',
            'name':'required',
            'description':'required'
        }
    });
</script>
@endsection
