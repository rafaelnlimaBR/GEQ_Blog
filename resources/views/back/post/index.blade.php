@extends('back.layout.template')

@section('conteudo')
<div class="botoes">
    <a href="{!! url()->route('post.novo') !!}" class="btn btn-success"><i class="ion-plus"> </i>Novo</a>
</div>
<div class="row pesquisa">
    {!! Form::open([ 'route' => 'post.pesquisa' ,'files'=>true])  !!}

        <div class="col-md-3">

            {{ Form::label('titulo', 'Titulo') }}
            {{ Form::text('titulo', "", ['class' => 'form-control']) }}


        </div>

        <div class="col-md-3 pull-right">

            {{ Form::label('buscar', 'Buscar') }}
            <button type="submit" class="btn btn-info form-control"> OK...</button>


        </div>
    {!! Form::close() !!}
</div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Publicação</th>

            <th style="width: 10px">Editar</th>
            <th style="width: 10px;">Excluir</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $r)
            <tr>
                <td>{!! $r->id !!}</td>
                <td>{!! $r->titulo !!}</td>
                <td>{!! $r->autor->nome !!}</td>
                <td>{!! $r->data_publicacao !!}</td>
                <td style="text-align: center"><a href="{!! url()->route('post.editar',['id'=>$r->id]) !!}" class="btn btn-warning btn-xs"><i class="ion-compose"></i></a></td>
                <td style="text-align: center"><a href="" class="btn btn-danger btn-xs excluir" data-toggle="modal" data-target=".modal-excluir" excluir="{!! $r->id !!}" ><i class="ion-trash-a"></i></a></td>
            </tr>
        @endforeach
        </tbody>

    </table>
{!! $posts->links() !!}
    @include('back.post.includes.excluir')
@endsection