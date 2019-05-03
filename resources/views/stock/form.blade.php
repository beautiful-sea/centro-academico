{{ Form::open(['url' => '/stock/input', 'method' => 'POST','id' =>  'stock-form']) }}
<div class="card">
    <div class="card-body">
        <input id="operation" name="operation" type="hidden" value="{{$stock['operation']}}">

        <div class="form-group">
           <label for="amount">Quantidade</label>
           <input id="amount" class="form-control" name="amount" type="number" value="{{(Request::is('stock/*/edit')?(int)$stock->amount:'')}}">
       </div>

       @if(Request::is("stock/*/edit"))
       {{Form::bsText('id_product','Produto',['default'=>$stock->product->name,'disabled'=>true]) }}
       @else
        {{Form::bsSelect('id_product','Produto',\App\Product::selectProducts(),['placeholder'=>null]) }}
       @endif
       {{Form::bsText('unitary_value','Valor Unitário',['placeholder'=>null,'class'=>'money-mask']) }}
   </div>
</div>

{{ Form::bsSubmit('Salvar',['class'=>'verify_stock btn btn-success']) }}

{{ Form::close() }}


@section('js')
<script>
    $('#stock-form').validate({
        submitHandler: function(form) {
        //CONFIRMA A AÇÃO COM USUÁRIO ANTES DE EXECUTAR
            //verifica o tipo de movimentação
            operation = ($("#operation").val() == 0)? 'input': 'output';

            id_product = document.getElementsByName('id_product')[0].value;
            $.get( '/stock/input/'+id_product, function( data ) {
                amount_stock = data.amount;
                amount_form  = $("input[name='amount']").val();

                if(amount_stock == null){
                    confirm =  (confirm(
                    '\nQuantidade em estoque antes: 0'+
                    '\nQuantidade em estoque agora: '+amount_form+
                    '\n\nDeseja confimar a ação?'));
                }else{
                  calc = ((operation == 'input')?(parseInt(amount_form)+parseInt(amount_stock)):parseInt(amount_stock)-(parseInt(amount_form)));  
                  confirm =  (confirm(
                    '\nQuantidade em estoque antes: '+amount_stock+
                    '\nQuantidade em estoque agora: '+calc+
                    '\n\nDeseja confimar a ação?'));
                }
                
                confirm == true ? form.submit() : window.location.href = '/stock';
          });
        },
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
