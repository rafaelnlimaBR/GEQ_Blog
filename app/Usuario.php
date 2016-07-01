<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;

class Usuario extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = [
        'nome', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    private static $restricao = [
        'email'     =>  'required|email|unique:usuarios',
        'nome'      =>  'required',
    ];
    private static $mensagem = [
        'required'    => 'O campo :attribute é obrigado.',
        'unique'    =>  'Já possui registro com esse(a) :attribute ',
        'email'     =>  'Email inválido'
    ];
    public static function validacao($dados)
    {
        if(array_key_exists('id',$dados)){
            static::$restricao['email'] .= ',email,'.$dados['id'];

        }
        return \Validator::make($dados,static::$restricao,static::$mensagem);
    }

    public function scopePorNome($query, $nome)
    {
        $query->where('nome','like',"%".$nome.'%');
    }
    public function scopePorEmail($query, $email)
    {
        $query->where('email','like',"%".$email.'%');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public static function atualizar(Request $r)
    {
        $usuario            =   Usuario::find($r->get('id'));
        $usuario->nome      =   $r->get('nome');
        $usuario->email     =   $r->get('email');
        $usuario->data_nascimento   =   $r->get('nascimento');
        if($r->get('password') != ""){
            $usuario->password  =  \Hash::make($r->get('password')) ;
        }

        if($r->hasFile('foto')){


            $imagem     =   $r->file('foto');
            $caminho    =   base_path().'/public/imgs/usuarios/';
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();

            \File::delete($caminho.$usuario->imagem);

            $imagem->move($caminho, $nomeImagem);
            $usuario->foto   =   $nomeImagem;



        }
        if($usuario->save() == false){
            throw new  \Exception('Não foi possível realizar o registro',200);
        }
    }
    public static function gravar(Request $r)
    {
        $usuario            =   new Usuario();
        $usuario->nome      =   $r->get('nome');
        $usuario->email     =   $r->get('email');
        $usuario->data_nascimento   =   $r->get('nascimento');
        $usuario->password  =   $r->get('password');

        if($r->hasFile('foto')){
            $imagem     =   $r->file('foto');
            $caminho    =   base_path().'/public/imgs/usuarios/';
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();

            $imagem->move($caminho, $nomeImagem);
            $usuario->foto   =   $nomeImagem;
        }

        if($usuario->save() == false){
            throw new  \Exception('Não foi possível realizar o registro',200);
        }
    }
    public static function deletar($id)
    {
        $usuario = Usuario::find($id);
        $caminho    =   base_path().'/public/imgs/usuarios/';
        \File::delete($caminho.$usuario->imagem);

        if($usuario->delete() == false){
            throw new  \Exception('Não foi possível realizar a exclusão',200);
        }
    }
}
