{{ Form::restForm($news_athletic, ['id' => 'news_athletic-form','files' => true,'route_prefix' => 'news_athletic']) }}
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="created_at">Data</label>
                    <input id="created_at" class="form-control" name="created_at" type="date" value="{{date('d-m-y',strtotime($news_athletic->created_at))}}" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">Título</label>
                    <input id="title" class="form-control" name="title" maxlength="180" type="text" value="{{$news_athletic->title}}" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="description">Descrição curta</label>
                    <input id="description" class="form-control" name="description" maxlength="180" type="text" value="{{$news_athletic->title}}" >
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-12">
             <div class="form-group">
                <label for="description">Notícia</label>
                <textarea id="summernote" name="text">{{$news_athletic->text}}</textarea>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Foto</label><small> </small>
            <input type="file" name="photo" class="form-control" >
        </div>
    </div>
    @if($news_athletic->extension_img)
    <img src="/files/news_athletic/{{$news_athletic->id}}.{{$news_athletic->extension_img}}" width="200px">
    @endif
</div>
</div>


{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}

@section('js')
<script>
    $('#news_athletic-form').validate({
        rules: {
            'created_at':'required',
            'name':'required',
            'description':'required'
        }
    });

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
<style type="text/css">
    .note-group-select-from-files {
      display: none;
  }
</style>
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
@endsection
