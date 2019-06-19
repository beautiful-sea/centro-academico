@extends('admin.boilerplate.page')

@section('header-title')
<h1>Dados Atlética</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item active">Atlética</li>
<li class="breadcrumb-item active">Dados</li>
@endsection

@section('content')
<div id="app">

    <div class="my-2">

        <!-- <a href="{{ route('stocks.input') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Entrada</a>
            <a href="{{ route('stocks.output') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Saída</a> -->

        </div>
        {{ Form::restForm($athletic_data, ['id' => 'athletic_data-form']) }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="prizes">Prêmios</label>
                            <input id="prizes" class="form-control" name="prizes" type="number" value="{{$athletic_data->prizes}}" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="trophies">Troféus</label>
                            <input id="trophies" class="form-control" name="trophies" type="number" value="{{$athletic_data->trophies}}" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="games_won">Jogos Vencidos</label>
                            <input id="games_won" class="form-control" name="games_won" type="number" value="{{$athletic_data->games_won}}" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="partners">Sócios</label>
                            <input id="partners" class="form-control" name="partners" type="number" value="{{$athletic_data->partners}}" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{ Form::bsSubmit('Salvar') }}


    </div>


    @stop

    @section('js')
    @stop
