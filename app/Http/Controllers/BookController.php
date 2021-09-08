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
}
