{{ Form::restForm($products_options,['id' => 'option-type-form']) }}
<div class="card">
    <div class="card-body">

        <div class="form-group">
            {{ Form::bsText('name', 'Opção',['default'=>$products_options->name]) }}
        </div>


    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#option-type-form').validate({
        rules: {
            'name':'required'
        }
    });
</script>
@endsection
