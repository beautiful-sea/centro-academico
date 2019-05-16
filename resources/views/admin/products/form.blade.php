{{ Form::restForm($product, ['id' => 'user-form','files' => true]) }}
<div class="card">
    <div class="card-body">
        {{ Form::bsText('name', 'Nome',['default'=>$product->name]) }}

        {{ Form::bsTextarea('description', 'Descrição',['rows'  =>  '2','maxlength' => 190,'default'=>$product->description]) }}
        <div class="form-group">
            <label for="minimum_stock">Quantidade Mínima</label>
            <input id="minimum_stock" class="form-control" name="minimum_stock" type="number" value="{{$product->minimum_stock}}">
        </div>
 
        <div class="form-group">
            <label for="maximum_stock">Quantidade Máxima</label>
            <input id="maximum_stock" class="form-control" name="maximum_stock" type="number" value="{{$product->maximum_stock}}">
        </div>

        <div class="form-group">
            <label for="value">Valor</label>
            <input id="value" class="form-control money-mask" name="value" type="text" value="{{$product->value}}">
        </div>

        <div class="form-group">
            <label for="value_partner">Valor para sócios</label>
            <input id="value_partner" class="form-control money-mask" name="value_partner" type="text" value="{{$product->value_partner}}">
        </div>  
        
        <select-options-products :items="{{$options}}" :types="{{$product->options}}"></select-options-products>      
        <div class="row">
            <div class="col-md-12 col-12">
                 {{ Form::bsFile('image', 'Imagem', ['default' => ($product->image_extension) ? sprintf('/files/products/%s.%s', $product->id, $product->image_extension) : null,'id'=>'image']) }}
                 @if(!$product->image_extension)
                 <div class="col-md-8">
                    <span class="alert alert-danger" style="display: block">Você não cadastrou imagem para esse produto ainda.</span>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#product-form').validate({
        rules: {
            'name':'required',
            'minimum_stock':'required',
            'value':'required',
            'value_partner':'required'
        },
        messages: {
            'email': {
                'remote': 'Este e-mail já está sendo utilizado'
            },
            'confirm_password': {
                'equalTo': 'Deve ser igual à Senha'
            },
            'confirm_new_password': {
                'equalTo': 'Deve ser igual à Nova Senha'
            }
        }
    });
</script>
@endsection
