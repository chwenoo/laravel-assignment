<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Http\Requests\StorePostRequest;
use App\Models\ArticleImage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $articles = Article::all();
        $articles = Article::with('articleImage')->get();
        // dd($articles);

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(StorePostRequest $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->slug = $request->slug;

        $article->context = $request->context;
        $article->excerpt = $request->excerpt;
        $article->save();

        $images = $request->file('images');
        // dd($images);

        foreach($images as $image) {

            $imgName = uniqid().".".$image->getClientOriginalExtension();
            // $image->storeAs('public/img', $imgName);
            $image->move(public_path('/uploadedimages'), $imgName);

            $image = new ArticleImage;
            $image->name = $imgName;
            $image->article_id = $article->id;
            $image->save();
        }
        // dd($article);
        // $article->save();

        return redirect()->route('articles.index');
    }

    public function show(int $id)
    {
        $article = Article::find($id);
        $images = ArticleImage::find($id);

        return view('articles.detail', compact('article', 'images'));
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
