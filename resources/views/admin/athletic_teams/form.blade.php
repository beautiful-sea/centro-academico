{{ Form::restForm($athletic_teams, ['id' => 'athletic_teams-form','files' => true,'route_prefix'=>'athletic_teams']) }}
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nome *</label>
                    <input id="name" class="form-control" name="name" type="text" value="{{$athletic_teams->name}}" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="description">Descrição *</label>
                    <textarea maxlength="180" id="description" class="form-control" name="description">{{$athletic_teams->description}}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="icon">Ícone *</label>
                    <input id="icon" class="form-control" name="icon" type="text" value="{{$athletic_teams->icon}}" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="link">Link</label>
                    <input id="link" class="form-control" name="link" type="text" value="{{$athletic_teams->link}}" >
                </div>
            </div>

        </div>

        
    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#athletic_teams-form').validate({
        rules: {
            'name':'required',
            'description':'required',
            'icon':'required'
        }
    });
</script>
@endsection
