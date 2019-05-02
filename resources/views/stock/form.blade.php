{{ Form::open(['url' => '/stock/input', 'method' => 'POST','id' =>  'stock-form']) }}
    <div class="card">
        <div class="card-body">
            <input id="operation" name="operation" type="hidden" value="">

            <div class="form-group">
            	<label for="amount">Quantidade</label>
            	<input id="amount" class="form-control money-mask" name="amount" type="number" value="{{$stock->ammount}}">
        	</div>

        	{{Form::bsSelect('id_product','Produto',\App\Product::selectProducts(),['placeholder'=>null]) }}
    
            {{Form::bsText('unitary_value','Valor Unitário',['placeholder'=>null,'class'=>'money-mask']) }}
    
            <div class="form-group">
                <label for="value_partner">Valor para sócios</label>
                <input id="value_partner" class="form-control money-mask" name="value_partner" type="text" >
            </div>
        </div>
    </div>
    
{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}


@section('js')
<script>
    $('#stock-form').validate({
        rules: {
            'amount': 'required',
            'unitary_value': 'required'
        },
        messages: {
            'amount': {
                'required': 'É necessário informar a quantidade.'
            },
            'unitary_value': {
                'required': 'É necessário informar o preço do produto.'
            }
        }
    });
</script>
@endsection
