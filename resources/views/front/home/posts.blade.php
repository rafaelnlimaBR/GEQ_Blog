@extends('front.layout.template')

@section('conteiner')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Postagens Recentes
            <small>Acompanhe nossas novidades!</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Portfolio Item Row -->
<div class="row">

    <div class="col-md-8">

        <a href="{!! url()->route('post.view',['id'=>$ultimopost->id]) !!}">{!! Html::image('imgs/posts/'.$ultimopost->imagem,'',['class'=>'img-responsive img-pricipal']) !!}</a>
    </div>

    <div class="col-md-4">
        <a href=""> <h3>{!! $ultimopost->titulo !!}</h3></a>
        <p>{!!  str_limit($ultimopost->conteudo, $limit = 200, $end = '...')!!}</p>
        <a href="{!! url()->route('post.view',['id'=>$ultimopost->id]) !!}">Continuar lendo.</a>
    </div>

</div>

<div class="row">

    <div class="col-lg-12">
        <h3 class="page-header">Artigo Anteriores</h3>
    </div>
    @foreach($posts as $r)
        <div class="col-sm-3 col-xs-6">
            <a href="{!! url()->route('post.view',['id'=>$r->id]) !!}">
                <span style="padding: 0; margin: 0;;">{!! $r->titulo !!}</span>
                {!! Html::image('imgs/posts/'.$r->imagem,'',['class'=>'img-responsive img-post']) !!}
            </a>

        </div>
    @endforeach



</div>

<div class="row col-md-12">
    {!! $posts->links() !!}

</div>
<hr>

<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Desenvolvido por <a href="https://www.facebook.com/rafaelnlima">Rafael do Nascimento Lima</a> </p>
        </div>
    </div>

</footer>

@endsection