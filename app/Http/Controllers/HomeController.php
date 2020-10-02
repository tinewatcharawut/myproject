<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(Auth::user()->role == "admin"){
        //     return redirect("/covid19");
        // }else if(Auth::user()->role == "teacher"){
        //     return redirect("/teacher");
        // }
        return view('home');
    }
}
