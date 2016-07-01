<?php
namespace App\Http\Controllers\Back;

use \App\Http\Controllers\Controller;
use App\Usuario;

class UsuarioController extends Controller
{

    public function index()
    {
        $titulo =   'Usuários';
        $usuario    =   Usuario::paginate(5);
        return view('back.usuario.index',['titulo'=>$titulo,'usuarios'=>$usuario]);
    }

    public function novo()
    {
        $titulo =   'Novo Usuário';
        return view('back.usuario.novo',['titulo'=>$titulo]);
    }

    public function editar($id)
    {
        $titulo     =   'Editar Usuário';
        $usuario    =   Usuario::find($id);

        //Verifica se há algum usuario com esse id, caso não, retorna para pagina index.
        if($usuario != null){
            return view('back.usuario.edicao',['usuario'=>$usuario,'titulo'=>$titulo]);
        }else{
            return redirect()->route('usuario.index')->with('alerta',['tipo'=>'warning','msg'=>'Nenhum registro localizdo.','icon'=>'check']);;
        }

    }

    public function atualizar()
    {
        try{

            $validacao  =   Usuario::validacao(request()->all());

            if($validacao->fails()){
                return redirect()->route('usuario.edicao',['id'=>request()->get('id')])->withErrors($validacao)->withInput();
            }
            Usuario::atualizar(request());

            return redirect()->route('usuario.index')->with('alerta',['tipo'=>'success','msg'=>'Cadastrado com sucesso.','icon'=>'check']);;
        }catch (\Exception $e){
            return redirect()->route('usuario.index')->with('alerta',['tipo'=>'danger','msg'=>'Erro:'.$e->getMessage(),'icon'=>'ban']);
        }
    }

    public function excluir()
    {
        try{


            Usuario::deletar(request()->get('id-excluir'));

            return redirect()->route('usuario.index')->with('alerta',['tipo'=>'success','msg'=>'Excluido com sucesso.','icon'=>'check']);
        }catch (\Exception $e){
            return redirect()->route('usuario.index')->with('alerta',['tipo'=>'danger','msg'=>'Erro:'.$e->getMessage(),'icon'=>'ban']);
        }
    }
    public function cadastrar()
    {
        try{

            $validacao  =   Usuario::validacao(request()->all());

            if($validacao->fails()){
                return redirect()->route('usuario.novo')->withErrors($validacao)->withInput();
            }
            Usuario::gravar(request());

            return redirect()->route('usuario.index')->with('alerta',['tipo'=>'success','msg'=>'Cadastrado com sucesso.','icon'=>'check']);;
        }catch (\Exception $e){
            return redirect()->route('usuario.index')->with('alerta',['tipo'=>'danger','msg'=>'Erro:'.$e->getMessage(),'icon'=>'ban']);
        }
    }

    public function pesquisa()
    {
        $titulo =   'Usuarios';
        $usuario    =   Usuario::PorNome(request()->get('nome'))->PorEmail(request()->get('email'))->paginate(5);
        return view('back.usuario.index',['titulo'=>$titulo,'usuarios'=>$usuario]);
    }
}