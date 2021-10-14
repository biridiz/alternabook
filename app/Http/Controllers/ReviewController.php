<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function registerPage()
    {
        return view('pages.review-register', ['userLogged' => AuthHelper::has()]);
    }


    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'livro' => 'required',
            'autor' => 'required',
            'editora' => 'required',
            'texto' => 'required',
        ]);

        $reviewData = $request->only(['livro', 'autor', 'editora', 'texto', 'codigo_livro']);

        if ($validator->fails()) {
            return view('pages.review-register', ['userLogged' => AuthHelper::has(), 'form' => $reviewData])->withErrors($validator);
        }

        $book = DB::table('livro')->where('id', $reviewData['codigo_livro'])->first();
        $codigo_livro = 0;

        if($book != null){
            $codigo_livro = $book->id;
        } else {
            $codigo_editora = DB::table('editora')->insertGetId([
                'nome_editora' => $reviewData['editora'],
                'contato_editora' => ''
            ]);
            
            $codigo_autor = DB::table('autor')->insertGetId([
                'nome_autor' => $reviewData['autor'],
            ]);

            $codigo_livro = DB::table('livro')->insertGetId([
                'titulo_livro' => $reviewData['livro'],
                'idioma_livro' => '',
                'id_editora' => $codigo_editora,
                'id_autor' => $codigo_autor
            ]);
        }
        
        $review = DB::table('resumo')->insertGetId([
            'titulo_resumo' => "Resenha do livro - " . $reviewData['livro'],
            'resumo' => $reviewData['texto'],
            'id_livro' => $codigo_livro,
            'id_usuario' => AuthHelper::get()->id
        ]);

        return redirect('/');
    }

    public function list($id_livro) 
    {
        $resumos = DB::table('resumo')->join('usuario', 'resumo.id_usuario', '=', 'usuario.id')->where('id_usuario', '=', AuthHelper::get()->id)->where('id_livro', '=', $id_livro)->get();
// echo '<pre>';
// print_r($resumos);exit;
        return view('pages.review-show', ['resumos' => $resumos, 'userLogged' => AuthHelper::has()]);
    }

    public function edit()
    {
        return view('pages.review-edit', ['userLogged' => AuthHelper::has()]);
    }
}
