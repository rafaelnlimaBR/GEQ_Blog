@extends('front.layout.template')

@section('conteiner')
<div class="detalhes">
    <h3>{!! $post->titulo !!}</h3>
    <h6>Autor: {!! $post->autor->nome !!}</h6>

    <p class="texto-detalhes">
        {!! Html::image('imgs/posts/'.$post->imagem,'',['class'=>'img-responsive img-detalhes']) !!}{!! $post->conteudo !!}
    </p>
</div>





@endsection