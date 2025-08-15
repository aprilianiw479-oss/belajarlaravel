<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category')->orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10|max:255',
            'slug' => 'required|unique:articles,slug',
            'content' => 'required',
            'author' => 'required',
            'category_id' => 'required',
        ],);

        $article = Article::create($request->all());
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get();

        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|min:10|max:255',
            'slug' => 'required|unique:articles,slug,' . $id,
            'content' => 'required',
            'author' => 'required',
            'category_id' => 'required',
        ], [
            'title.required' => 'Name is required!',
            'slug.required' => 'Slug must be filled',
            'slug.unique' => 'Slug already exists, please change Slug',
            'content' => 'content must be filled in',
            'author' => 'author must be filled in',
            'category_id' => 'Category must be filled in',
        ]);
        
        $article = Article::find($id);
        $article->update($request->all());
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id)->delete();
        return redirect()->back();
    }
}
