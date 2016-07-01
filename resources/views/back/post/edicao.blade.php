@extends('back.layout.template')

@section('conteudo')

    {{ Form::open([ 'route' => 'post.atualizar' ,'files'=>'true']) }}

        @include('back.post.includes.formulario')

        <button type="submit" class="btn btn-success"><i class="ion-archive"> </i>Atualizar</button>
        <a href="{!! url()->route('post.index') !!}" class="btn btn-default"><i class="ion-reply"> </i>Voltar</a>

    {{ Form::close() }}

@endsection