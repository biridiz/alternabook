<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    public function signInUser(Request $request)
    {
        session_start();

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        if ($validator->fails()) {
            return view('pages.login')->withErrors($validator);
        }

        $userData = $request->only(['email', 'senha']);

        $countUsersByEmail = DB::table('usuario')
                                ->where('email', $userData['email'])
                                ->where('senha', $userData['senha'])
                                ->count();

        if($countUsersByEmail == 0){
            return view('pages.login', ['msg' => 'Não foi encontrado nenhum usuário']);
        }

        $user = DB::table('usuario')
                ->where('email', $userData['email'])
                ->where('senha', $userData['senha'])
                ->first();
        
        $_SESSION["loggedUserId"] = $user->id;
        
        return view('pages.login');
    }

    public function signUpUser(Request $request)
    {
        session_start();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'senha' => 'required',
            'data_nascimento' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return view('pages.cadastro')->withErrors($validator);
        }

        $userData = $request->only(['name', 'data_nascimento', 'email', 'senha', 'sexo']);

        $countUsersByEmail = DB::table('usuario')->where('email', $userData['email'])->count();

        if($countUsersByEmail > 0){
            return view('pages.cadastro', ['msg' => 'E-mail informado já esta sendo utilizado']);
        }
        
        $userId = DB::table('usuario')->insertGetId([
            'nome_usuario' => $userData['name'],
            'data_nascimento' => $userData['data_nascimento'],
            'sexo' => $userData['sexo'],
            'email' => $userData['email'],
            'senha' => $userData['senha'],
        ]);

        $_SESSION["loggedUserId"] = $userId;
        
        return redirect('/');
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
