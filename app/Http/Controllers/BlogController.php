<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        return view('blogPosts.index', [
            'articles' => Article::latest()->get()
        ]);
    }
    function show($articleID){
        $article = Article::find($articleID);
        return view('blogPosts.show', ['article' => $article]);
    }
    public function create(){
        return view('blogPosts.create');
    }

    Public function store(){
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/blog');
    }

    public function edit($articleID){
        $article = Article::find($articleID);
        return view('blogPosts.edit', compact('article'));
    }

    public function update($id) {
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/blog/' . $article->id);
    }

    public function destroy($articleID) {
        Article::find($articleID)->delete();
        return redirect('/blog');
    }

    public function __construct()
{
	$this->middleware('auth')->except(['index', 'show']);
}
}
