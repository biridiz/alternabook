<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResenhaController extends Controller
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

    public function index()
    {
        return view('pages.resenha', ['userLogged' => AuthHelper::has()]);
    }
}
