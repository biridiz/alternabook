<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
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

    public function search(Request $request)
    {
        $searchTerm = $request->input('s');

        $livros = DB::table('livro')->where('titulo_livro', 'like', '%'. $searchTerm . '%')->get();

        return view('pages.index', ['term' => $searchTerm, 'livros' => $livros]);
    }

    public function searchDetail(Request $request)
    {
        $searchTerm = $request->input('term');

        if($searchTerm == "")
            return response()->json([]);

        $livros = DB::table('livro')
            ->join('autor', 'livro.id_autor', '=', 'autor.id')
            ->join('editora', 'livro.id_editora', '=', 'editora.id')
            ->where('titulo_livro', 'like', '%'. $searchTerm . '%')
            ->select('livro.titulo_livro as nome_livro', 'livro.id as id_livro', 'autor.nome_autor', 'autor.id as id_autor', 'editora.nome_editora', 'editora.id as id_editora')
            ->get();

        return response()->json($livros);
    }
}
