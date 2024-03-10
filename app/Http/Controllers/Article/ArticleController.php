<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'context' => ['required', 'string'],
            'excerpt' => ['required', 'string'],
        ]);

        // $validator = Validator::make($request->all(), [
        //     'title' => ['required', 'string'],
        //         'slug' => ['required', 'string'],
        //         'context' => ['required', 'string'],
        //         'excerpt' => ['required', 'string'],
        // ]);

        // if ($validator->fails()) {
        //     return redirect('my-form')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        Article::create([
            'title' => $request->title,
            'slug' => $request->slug,
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

    public function update(Request $request, int $id)
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
