<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /* Show the list of resource */
    public function index()
    {
       return view('article.index',['articles'=>Article::all()]);
    }

    /* Show the form for creating a new resource */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Article::create($request->validate([
           'user_id'=> 'required',
           'title'=>'required|String',
           'excerpt'=>'required|String',
           'body'=>'required|String'
       ]));
        return redirect()->route('articles.index')->with('success', 'Operation Successful!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
      return  view('article.show',['article'=> $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->validate([
            'user_id'=> 'required',
            'title'=>'required|String',
            'excerpt'=>'required|String',
            'body'=>'required|String'
        ]));
        return redirect()->route('articles.show',$article->id)->with('success', 'Operation Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'))->with('danger', 'Operation Successful!');
    }
}
