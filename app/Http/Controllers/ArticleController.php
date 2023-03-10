<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index(){
        $data = Article::latest()->paginate(8);
        return view('articles.index', ['articles' => $data]);
    }
    public function detail($id){
        $data = Article::find($id);
        return view('articles.detail.index', ['article' => $data]);
    }

    public function data(){
        return view('articles.create.index');
    }

    public function create(){
        
        $validate = validator(request()->all(),[
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        $article = new Article;
        $article['title'] = request()->title;
        $article['body'] = request()->body;
        $article['category_id'] = request()->category_id;
        $article->save();

        return redirect('/articles');
    }
}
