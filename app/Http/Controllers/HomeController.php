<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = ArticleModel::all()->toArray();
        foreach ($articles as $key=>$val){
            $articles[$key]['img'] = public_path($val['img']);
        }
//        dump($articles);
        return view('home',['articles' => $articles]);
    }
}
