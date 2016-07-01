@extends('back.layout.template')

@section('conteudo')

    {{ Form::open([ 'route' => 'usuario.cadastrar','files'=>'true' ]) }}

    @include('back.usuario.includes.formulario')

    <button type="submit" class="btn btn-success"><i class="ion-archive"> </i>Salvar</button>
    <a href="{!! url()->route('usuario.index') !!}" class="btn btn-default"><i class="ion-reply"> </i>Voltar</a>

    {{ Form::close() }}

@endsection