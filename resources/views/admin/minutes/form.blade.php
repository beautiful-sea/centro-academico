
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date">Data</label>
                    <input id="date" class="form-control" name="date" type="date" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="start_time">Horário de início</label>
                    <input id="start_time" class="form-control" name="start_time" type="time" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="start_time">Horário de termino</label>
                    <input id="start_time" class="form-control" name="end_time" type="time" >
                </div>
            </div>
        </div>

        <div class="row">
            <participants-minutes :participants="{{$participants}}"></participants-minutes>
            <schedule-minutes :all_schedules="{{$schedules}}"></schedule-minutes>
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
