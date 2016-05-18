<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class MyVideosController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('myvideos');
    }
}
