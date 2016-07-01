<div class="row">
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
            @if(isset($usuario))
                {{ Form::hidden('id', $usuario->id, ['class' => 'form-control']) }}
            @endif

            {{ Form::label('nome', 'Nome') }}
            {{ Form::text('nome', (isset($usuario)?$usuario->nome:''), ['class' => 'form-control']) }}
            {{ $errors->first('nome', ':message') }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', (isset($usuario)?$usuario->email:''), ['class' => 'form-control']) }}
            {{ $errors->first('email', ':message') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('nascimento') ? ' has-error' : '' }}">
            {{ Form::label('nascimento', 'Email') }}
            {{ Form::text('nascimento', (isset($usuario)?$usuario->data_nascimento:''), ['class' => 'form-control']) }}
            {{ $errors->first('nascimento', ':message') }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            {{ Form::label('password', 'Senha') }}
            {{ Form::text('password', null, ['class' => 'form-control']) }}
            {{ $errors->first('password', ':message') }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
            {{ Form::label('foto', 'Foto') }}
            {{ Form::file('foto', null, ['class' => 'form-control']) }}
            {{ $errors->first('foto', ':message') }}
        </div>
    </div>
</div>
