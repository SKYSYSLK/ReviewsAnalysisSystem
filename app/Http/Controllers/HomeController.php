<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\review;
use Google\Cloud\Core\ServiceBuilder;

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
        return view('home');
    }

    public function postReview(Request $request){
        $rev = new review();
        $rev->user_id = \Auth::user()->id;
        $rev->review = $request->review;
        $rev->score = $this->analyze($request->review);
        $rev->save();
        dd($rev->score);
    }

    public function analyze($review){
        $cloud = new ServiceBuilder([
            'keyFilePath' => base_path('storage/app/public/gc.json'),
            'projectId' => 'sentimental-231106'
        ]);

        $language = $cloud->language();
        $annotation = $language->analyzeSentiment($review);
        $sentiment = $annotation->sentiment();
        return $sentiment['score'];    
    }
}
