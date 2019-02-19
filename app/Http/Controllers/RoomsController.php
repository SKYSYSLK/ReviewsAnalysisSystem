<?php

namespace App\Http\Controllers;

use App\review;
use App\User;
use Illuminate\Http\Request;

class RoomsController extends Controller
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
        $reviews = review::where('category', 1)->get()  ;
        return view('rooms', ['reviews' => $reviews]);
    }
}
