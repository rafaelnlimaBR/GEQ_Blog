@extends('back.layout.template')

@section('conteudo')
<div class="botoes">
    <a href="{!! url()->route('usuario.novo') !!}" class="btn btn-success"><i class="ion-plus"> </i>Novo</a>
</div>
<div class="row pesquisa">
    {!! Form::open([ 'route' => 'usuario.pesquisa' ])  !!}

        <div class="col-md-3">

            {{ Form::label('nome', 'Nome') }}
            {{ Form::text('nome', "", ['class' => 'form-control']) }}


        </div>
        <div class="col-md-3">

            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', "", ['class' => 'form-control']) }}


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

            <th>Nome</th>
            <th>Email</th>
            <th>Nascimento</th>
            <th style="width: 10px">Editar</th>
            <th style="width: 10px;">Excluir</th>

        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $r)
            <tr>
                <td>{!! $r->id !!}</td>
                <td>{!! $r->nome !!}</td>
                <td>{!! $r->email !!}</td>
                <td>{!! $r->data_nascimento !!}</td>
                <td style="text-align: center"><a href="{!! url()->route('usuario.editar',['id'=>$r->id]) !!}" class="btn btn-warning btn-xs"><i class="ion-compose"></i></a></td>
                <td style="text-align: center"><a href="" class="btn btn-danger btn-xs excluir" data-toggle="modal" data-target=".modal-excluir" excluir="{!! $r->id !!}" ><i class="ion-trash-a"></i></a></td>
            </tr>
        @endforeach
        </tbody>

    </table>
{!! $usuarios->links() !!}
    @include('back.usuario.includes.excluir')
@endsection