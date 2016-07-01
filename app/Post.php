<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 01/07/2016
 * Time: 00:20
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{
    private static $restricao = [
        'titulo'    =>  'required',
        'conteudo'  =>  'required',
        'publicacao'=>  'required'
    ];
    private static $mensagem = [
        'required'    => 'O campo :attribute é obrigado.',
        'unique'        =>'O :attribute já existe.'
    ];
    public static function validacao($dados)
    {
        return \Validator::make($dados,static::$restricao,static::$mensagem);
    }

    public function scopePorTitulo($query,$titulo)
    {
        return $query->where('titulo','like',"%".$titulo."%");
    }

    public function autor()
    {
        return $this->belongsTo('App\Usuario','usuario_id');
    }

    public static function atualizar(Request $r)
    {
        $post            =   Post::find($r->get('id'));
        $post->titulo    =   $r->get('titulo');
        $post->conteudo  =   $r->get('conteudo');
        $post->data_publicacao   =   $r->get('publicacao');
        if($r->hasFile('imagem')){


            $imagem     =   $r->file('imagem');
            $caminho    =   base_path().'/public/imgs/posts/';
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();

            \File::delete($caminho.$post->imagem);

            $imagem->move($caminho, $nomeImagem);
            $post->imagem   =   $nomeImagem;



        }
        $post->autor()->associate(Usuario::find($r->get('autor')));

        if($post->save() == false){
            throw new  \Exception('Não foi possível realizar o registro',200);
        }
    }
    public static function gravar(Request $r)
    {
        $post            =   new Post();
        $post->titulo    =   $r->get('titulo');
        $post->conteudo  =   $r->get('conteudo');
        $post->data_publicacao   =   $r->get('publicacao');
        if($r->hasFile('imagem')){
            $imagem     =   $r->file('imagem');
            $caminho    =   base_path().'/public/imgs/posts/';
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();

            $imagem->move($caminho, $nomeImagem);
            $post->imagem   =   $nomeImagem;
        }
        $post->autor()->associate(Usuario::find($r->get('autor')));


        if($post->save() == false){
            throw new  \Exception('Não foi possível realizar o registro',200);
        }
    }
    public static function deletar($id)
    {
        $post = Post::find($id);
        $caminho    =   base_path().'/public/imgs/posts/';
        \File::delete($caminho.$post->imagem);

        if($post->delete() == false){
            throw new  \Exception('Não foi possível realizar a exclusão',200);
        }
    }
}