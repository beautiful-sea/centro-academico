{{ Form::restForm($products_options_types,['id' => 'option-type-form']) }}
<div class="card">
    <div class="card-body">
<!-- 
        <div class="form-group">
            <label>Opção</label>
            <select class="form-control" readonly="readonly">
                <option selected="selected"></option>
            </select>
        </div> -->

        {{ Form::bsText('name', 'Tipo da opção',['default'=>$products_options_types->name]) }}

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
