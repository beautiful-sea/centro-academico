{{ Form::restForm($team_eng, ['id' => 'team_eng-form','files' => true,'route_prefix'=>'team_eng']) }}
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nome *</label>
                    <input id="name" class="form-control" name="name" type="text" value="{{$team_eng->name}}" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="description">Informações *</label>
                    <textarea maxlength="180" id="description" class="form-control" name="description">{{$team_eng->description}}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="linkedin">Linkedin</label>
                    <input id="linkedin" class="form-control" name="linkedin" type="text" value="{{$team_eng->linkedin}}" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input id="instagram" class="form-control" name="instagram" type="text" value="{{$team_eng->instagram}}" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="lattes">Lattes</label>
                    <input id="lattes" class="form-control" name="lattes" type="text" value="{{$team_eng->lattes}}" >
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Foto de Perfil *</label><small> Deixe em branco caso não queira alterar</small>
                    <input type="file" name="photo" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                @if($team_eng->extension_img)
                <img src="/files/team_eng/{{$team_eng->id}}.{{$team_eng->extension_img}}">

                @endif
            </div>
        </div>

        
    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#team_eng-form').validate({
        rules: {
            'name':'required',
            'description':'required'
        }
    });
</script>
@endsection
