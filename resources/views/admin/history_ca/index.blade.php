@extends('admin.boilerplate.page')

@section('header-title')
<h1>História do Centro Acadêmico</h1>
@stop

@section('header-breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
<li class="breadcrumb-item active">Centro Acadêmico</li>
<li class="breadcrumb-item active">História</li>
@endsection

@section('content')
<div id="app">

    <div class="my-2">

        <!-- <a href="{{ route('stocks.input') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Entrada</a>
            <a href="{{ route('stocks.output') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Saída</a> -->

        </div>
        <div class="card">
            <div class="card-body">
                {{ Form::restForm($history_ca, ['id' => 'history_ca-form','files' => true,'route_prefix' => 'history_ca']) }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="prizes">História</label>
                            <textarea id="summernote" name="text"></textarea>
                        </div>
                    </div>
                </div>
                {{ Form::bsSubmit('Salvar') }}

                {{ Form::close() }}

            </div>


            @stop

            @section('js')
            <!-- include summernote css/js -->
            <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
            <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

            <script type="text/javascript">
               $(document).ready(function() {
                  $('#summernote').summernote({
                    placeholder: 'Escreva sua notícia aqui!',
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                    [ 'style', [ 'style' ] ],
                    [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                    [ 'fontname', [ 'fontname' ] ],
                    [ 'fontsize', [ 'fontsize' ] ],
                    [ 'color', [ 'color' ] ],
                    [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                    [ 'table', [ 'table' ] ],
                    [ 'insert', [ 'link'] ],
                    [ 'view', [ 'undo', 'redo' ] ]
                    ]
                });
              });
          </script>
          @stop
