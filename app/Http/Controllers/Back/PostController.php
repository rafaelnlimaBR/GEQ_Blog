<?php

namespace App\Http\Controllers\Back;


use \App\Http\Controllers\Controller;
use App\Post;
use App\Usuario;

class PostController extends Controller
{
//  Controller responsável por gerenciar os posts da página home.


    public function index()
    {
        $titulo =   'Posts';
        $posts    =   Post::paginate(5);
        return view('back.post.index',['titulo'=>$titulo,'posts'=>$posts]);
    }

    public function novo()
    {
        $titulo =   'Novo Post';
        return view('back.post.novo',['titulo'=>$titulo]);
    }

    public function editar($id)
    {
        $titulo     =   'Editar Post';
        $post       =   Post::find($id);

        //Verifica se há algum post com esse id, caso não, retorna para pagina index.
        if($post != null){
            return view('back.post.edicao',['post'=>$post,'titulo'=>$titulo]);
        }else{
            return redirect()->route('post.index')->with('alerta',['tipo'=>'warning','msg'=>'Nenhum registro localizdo.','icon'=>'check']);;
        }

    }

    public function atualizar()
    {
        try{

            $validacao  =   Post::validacao(request()->all());

//          Validando dados
            if($validacao->fails()){
                return redirect()->route('post.editar',['id'=>request()->get('id')])->withErrors($validacao)->withInput();
            }

            Post::atualizar(request());

            return redirect()->route('post.index')->with('alerta',['tipo'=>'success','msg'=>'Cadastrado com sucesso.','icon'=>'check']);;
        }catch (\Exception $e){
            return redirect()->route('post.index')->with('alerta',['tipo'=>'danger','msg'=>'Erro:'.$e->getMessage(),'icon'=>'ban']);
        }
    }

    public function excluir()
    {
        try{


            Post::deletar(request()->get('id-excluir'));

            return redirect()->route('post.index')->with('alerta',['tipo'=>'success','msg'=>'Excluido com sucesso.','icon'=>'check']);
        }catch (\Exception $e){
            return redirect()->route('post.index')->with('alerta',['tipo'=>'danger','msg'=>'Erro:'.$e->getMessage(),'icon'=>'ban']);
        }
    }
    public function cadastrar()
    {

        try{

            $validacao  =   Post::validacao(request()->all());
//          Validando dados
            if($validacao->fails()){
                return redirect()->route('post.novo')->withErrors($validacao)->withInput();
            }

            Post::gravar(request());

            return redirect()->route('post.index')->with('alerta',['tipo'=>'success','msg'=>'Cadastrado com sucesso.','icon'=>'check']);;
        }catch (\Exception $e){
            return redirect()->route('post.index')->with('alerta',['tipo'=>'danger','msg'=>'Erro:'.$e->getMessage(),'icon'=>'ban']);
        }
    }

    public function pesquisa()
    {
        $titulo =   'Posts';

        //Retorna os posts pos titulo com base na pesquisa, e com paginação.
        $posts    =   Post::PorTitulo(request()->get('titulo'))->paginate(5);

        return view('back.post.index',['titulo'=>$titulo,'posts'=>$posts]);
    }
}