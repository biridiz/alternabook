<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;

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

    public function register()
    {
        return view('pages.review-register', ['userLogged' => AuthHelper::has()]);
    }

}
