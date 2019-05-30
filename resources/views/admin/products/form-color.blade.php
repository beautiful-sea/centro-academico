{{ Form::restForm($color,['id' => 'color-form']) }}
<div class="card">
    <div class="card-body">

        <div class="form-group">
            {{ Form::bsText('name', 'Cor',['default'=>$color->name]) }}
        </div>


    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#color-form').validate({
        rules: {
            'name':'required'
        }
    });
</script>
@endsection
