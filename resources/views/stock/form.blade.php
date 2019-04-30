{{ Form::open(['url' => '/stock/input', 'method' => 'PUT']) }}
    <div class="card">
        <div class="card-body">
            <div class="form-group">
            	<label for="amount">Quantidade</label>
            	<input id="amount" class="form-control" name="amount" type="number" value="{{$stock->ammount}}">
        	</div>

        	{{Form::bsSelect('id_product','Produto',\App\Product::selectProducts(),['placeholder'=>null]) }}

        	<div class="form-group">
            	<label for="unitary_value">Valor Unitário</label>
            	<input id="unitary_value" class="form-control" name="unitary_value" type="float" >
        	</div>
        </div>
    </div>
    
{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}