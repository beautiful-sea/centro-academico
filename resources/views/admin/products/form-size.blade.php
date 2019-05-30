{{ Form::restForm($size,['id' => 'size-form']) }}
<div class="card">
    <div class="card-body">

        {{ Form::bsText('name', 'Tamanho',['default'=>$size->name]) }}

    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#size-form').validate({
        rules: {
            'name':'required'
        }
    });
</script>
@endsection
