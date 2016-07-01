<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 01/07/2016
 * Time: 14:35
 */

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Post;

class HomeController extends Controller
{

    public function index()
    {

        $posts          =   Post::orderBy('data_publicacao', 'desc')->paginate(4);
        $ultimoPost     =   Post::orderBy('data_publicacao', 'desc')->first();
        return view('front.home.posts',['posts'=>$posts,'ultimopost'=>$ultimoPost]);
    }

    public function detalhe($id)
    {
        $post   =   Post::find($id);

        return view('front.home.detalhes',['post'=>$post]);

    }
}