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
        $user_type = auth()->user()->role;
        if ($user_type == 'admin') {
            $article = \App\Models\Article::where('title', 'main')->first();
            return view('home', compact('article'));
        } else {
            $article = \App\Models\Article::where('title', 'demography')->first();
            return view('user.profile', compact('article'));
        }
    }
}
