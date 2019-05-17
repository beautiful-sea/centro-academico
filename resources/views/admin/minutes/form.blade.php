
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="minimum_stock">Data</label>
                    <input id="minimum_stock" class="form-control" name="minimum_stock" type="date" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="minimum_stock">Horário de início</label>
                    <input id="minimum_stock" class="form-control" name="minimum_stock" type="time" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="minimum_stock">Horário de termino</label>
                    <input id="minimum_stock" class="form-control" name="minimum_stock" type="time" >
                </div>
            </div>
        </div>

        <div class="row">
            <participants-minutes :participants="[{name:'Lindomar',id:1,area:'RH',job_title:'Assistente administrativo'}]"></participants-minutes>
            <schedule-minutes></schedule-minutes>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Arquivo da ATA</label><small> Formato de .pdf</small>
                    <input type="file" name="" class="form-control" >
                </div>
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
