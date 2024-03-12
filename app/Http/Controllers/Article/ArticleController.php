<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Http\Requests\StorePostRequest;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(StorePostRequest $request)
    {
        // $path = $request->file('image')->store('artilce');
        // dd($request->all());
        $imgName = time().".".$request->image->getClientOriginalExtension();
        // dd($imgName);
        $request->image->move(public_path('/uploadedimages'), $imgName);

        Article::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'image' => $imgName,
            'context' => $request->context,
            'excerpt' => $request->excerpt,
        ]);
        return redirect()->route('articles.index');
    }

    public function show(int $id)
    {
        $article = Article::find($id);
        return view('articles.detail', compact('article'));
    }

    public function edit(int $id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(StorePostRequest $request, int $id)
    {
        $article = Article::find($id);
        $article->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'context' => $request->context,
            'excerpt' => $request->excerpt,
        ]);

        return redirect()->route('articles.index');
    }

    public function destroy(int $id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
