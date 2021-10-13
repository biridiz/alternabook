<?php

namespace App\Http\Controllers;

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
        return view('pages.review-register');
    }

}
