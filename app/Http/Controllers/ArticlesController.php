<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // Show a list
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->Articles;
        }else{
            $articles = Article::latest()->get();
        }

        return view("articles.index",['articles'=>$articles]);
    }

    public function show($id)
    {
        //Show a single resource.
        $article = Article::find($id);

        return view("articles.show",['article'=>$article]);
    }


    public function create()
    {
        // Shows a view to create a new resource
        $tags = Tag::all();
        return view('articles.create', [
            'tags' => $tags
        ]);
    }

    public function store()
    {

        $validatedAttributes = request()->validate([
            'title'=> 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = new Article($validatedAttributes);
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect('/articles');
    }

    public function edit($id)
    {
        //Show a view to edit an existing resource\

        $article = Article::find($id);
        return view('articles.edit',[
            'article' => $article
        ]);

    }

    public function  update(Article $article)
    {
        $validatedAttributes = request()->validate([
            'title'=> 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        //Persist the edited resource

        $article->update($validatedAttributes);


        return redirect('/articles/'. $article->id);
    }

    public function destroy()
    {
        //Delete the resource
    }
}
