<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
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

    public function signUpUser(Request $request)
    {
        $searchTerm = $request->input('s');

        $livros = DB::table('livro')->where('titulo_livro', 'like', '%'. $searchTerm . '%')->get();

        return json_encode();
    }

    public function signUpPage()
    {
        return view('pages.cadastro');
    }

    public function signInPage()
    {
        return view('pages.login');
    }
}
