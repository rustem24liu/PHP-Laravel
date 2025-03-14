<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        if (Gate::allows('view-article', auth()->user())) {
            $articles = Article::all();
        } else {
            $articles = Article::where('user_id', auth()->id())->get();
        }
//        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function create(){

        if (Gate::denies('create-article')){
            abort(403);
        }

        return view('articles.create');
    }

    public function store(Request $request){

        if (Gate::denies('create-article')) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255',
            'themes' => 'required|string|max:255',
//            'email' => 'required|email',
            'phone' => 'required|string|max:20',
        ]);

//        dd($request->all());

        $article = new Article($request->all());
        $article->user_id = auth()->id();
        $article->save();

        return redirect()->route('table')->with('success', 'Article created!');

//        $data = $request->only(['name', 'profession', 'course', 'email', 'phone']);
//        $data['user_id'] = Auth::user()->id;
//
//        $article = Article::create($data);
//
//        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    public function show(Article $article) {
        return view('articles.show', compact('article'));
    }


    public function edit(Article $article){
        if (Gate::denies('update-article', $article)) {
            abort(403);
        }

        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article){
        if (Gate::denies('update-article', $article)) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255',
            'themes' => 'required|string|max:255',
//            'email' => 'required|email',
            'phone' => 'required|string|max:20',
        ]);

        $article->update($request->all());

        return redirect()->route('table')->with('success', 'Article updated!');

    }

    public function destroy(Article $article){
        if (Gate::denies('delete-article', $article)) {
            abort(403);
        }

        $article->delete();

        return redirect()->route('table')->with('success', 'Article deleted!');
    }

}
