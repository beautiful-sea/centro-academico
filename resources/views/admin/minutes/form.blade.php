{{ Form::restForm($minute, ['id' => 'minute-form','files' => true]) }}
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date">Data</label>
                    <input id="date" class="form-control" name="date" type="date" value="{{$minute->date}}" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="start_time">Horário de início</label>
                    <input id="start_time" class="form-control" name="start_time" type="time" value="{{$minute->start_time}}" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="end_time">Horário de termino</label>
                    <input id="end_time" class="form-control" name="end_time" type="time" value="{{$minute->end_time}}" >
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
                    <label>Arquivo da ATA</label><small> Somente formato em .pdf</small>
                    <input type="file" name="ata" class="form-control" >
                </div>
            </div>
        </div>
    </div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#minute-form').validate({
        rules: {
            'date':'required',
            'start_time':'required',
            'end_time':'required'
        }
    });
</script>
@endsection
