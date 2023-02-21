<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('article/create');
    }
    public function store(ArticleRequest $request){
        // if($request->has('img')){
        // // dd($request->all());

        // $img =$request->file('img')->store('public');
        // }else{
        //     $img = 'img/default.png';
        // }
        $article = Article::create(
            [
                'title'=>$request->input('title'),
                'author'=>$request->input('author'),
                'body'=>$request->input('body'),
                'img'=>$request->has('img') ? $request->file('img')->store('public') :'img/default.png'
            ]
        );
        // dd($request);
        return redirect()->route('homepage')->with('message', 'Il tuo articolo è stato pubblicato');
    }
    public function show(){
        $articles = Article::all()->sortDesc();
        return view('article/show' , compact('articles'));
    }
}
