{{ Form::restForm($product, ['id' => 'product-form','files' => true]) }}

<div class="card">
    <div class="card-body">
        {{ Form::bsText('name', 'Nome') }}

        {{ Form::bsTextarea('description', 'Descrição',['rows'  =>  '2','maxlength' => 190]) }}

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

        <div class="row">
            <div class="col-md-6">
                {{ Form::bsFile('image', 'Imagem', ['default' => ($product->image_extension) ? sprintf('/files/products/%s.%s', $product->id, $product->image_extension) : null]) }}
            </div>
        </div>

        @if($product->image)
        <div class="row">
            <div class="col-md-6">

            </div>
        </div>
        @endif
    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#product-form').validate({
        rules: {
            'name': 'required',
            'email': {
                'required': true,
                'email': true,
                'remote': {
                    url: '{{ route("users.check-email") }}',
                    type: 'post',
                    data: {
                        id: $('#id').val(),
                        _token: '{{ csrf_token() }}'
                    }
                },
            },
            'password': 'required',
            'confirm_password': {
                'required': true,
                'equalTo': '#password'
            },
            'role': 'required',
            'confirm_new_password': {
                'required': () => $('#new_password').val() !== '',
                'equalTo': '#new_password'
            }
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
