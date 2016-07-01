<div class="row">
    <div class="col-md-8">
        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
            @if(isset($post))
                {{ Form::hidden('id', $post->id, ['class' => 'form-control']) }}
            @endif

            {{ Form::label('titulo', 'Titulo') }}
            {{ Form::text('titulo', (isset($post)?$post->titulo:''), ['class' => 'form-control']) }}
            {{ $errors->first('titulo', ':message') }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('publicacao') ? ' has-error' : '' }}">
            {{ Form::label('publicacao', 'Publicação') }}
            {{ Form::text('publicacao', (isset($post)?$post->data_publicacao:''), ['class' => 'form-control']) }}
            {{ $errors->first('publicacao', ':message') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group{{ $errors->has('conteudo') ? ' has-error' : '' }}">
            {{ Form::label('conteudo', 'Conteudo') }}
            {{ Form::textarea('conteudo', (isset($post)?$post->conteudo:''), ['class' => 'form-control']) }}
            {{ $errors->first('conteudo', ':message') }}
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('autor') ? ' has-error' : '' }}">
            {{ Form::label('autor', 'Autor') }}
            {{ Form::select('autor', $usuarios->lists('nome','id'),(isset($post)?$post->autor->id:''), ['class' => 'form-control']) }}
            {{ $errors->first('autor', ':message') }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
            {{ Form::label('imagem', 'Autor') }}
            {{ Form::file('imagem', "", ['class' => 'form-control']) }}
            {{ $errors->first('imagem', ':message') }}
    </div>
    </div>
</div>