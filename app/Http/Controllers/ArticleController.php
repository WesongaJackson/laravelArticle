<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        $featuredTagId = Tag::where('name', 'Featured')->first();
        $featuredArticle = $featuredTagId->articles()->with(['user', 'category', 'tags'])->inRandomOrder()->first();
        $articles = Article::with(['user', 'category', 'tags'])->latest()->paginate(9);
        return view('articles.index', compact('articles', 'featuredArticle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Log::info($request->all());
        //
        $request->validate([
            'title' => 'required|unique:articles|max:100',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
            'image' => 'mimes:jpeg,png,jpg|max:2048|nullable',
        ]);

        $article = new Article();
        $article->user_id = Auth::id();
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->content = $request->content;
        $image = '';
        if ($request->hasFile('image')) {
            $name = $request->image->hashName();
            $image = $request->file('image')->storeAs('ArticleImages', $name, 'public');
        }
        $article->image = $image;
        $article->save();
        $article->tags()->attach($request->tags);
        Log::info($article->tags);

        return redirect()->route('articles.show', $article)->with('success', 'Article created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
        $relatedArticles = Article::with(['user',  'category'])->where('category_id', $article->category_id)->where('id', '!=', $article->id)->inRandomOrder()->get();
        return view('articles.show', compact('article', 'relatedArticles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
        if (Auth::id() !== $article->user_id || Auth::id() !== 1) {
            abort(403);
        }

        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
        $previousImage = $article->image;
        $request->validate([
            'title' => 'required|max:100',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
            'content' => 'required|string',
            'image' => 'mimes:jpeg,png,jpg|max:2048|nullable',
        ]);
        $article->title = $request->title;
        $article->category_id = $request->category_id;


        $article->content = $request->content;
        $image = '';
        if ($request->hasFile('image')) {
            $name = $request->image->hashName();
            $image = $request->file('image')->storeAs('ArticleImages', $name, 'public');
        }
        if ($image) {
            $article->image = $image;
        } else {
            $article->image = $previousImage;
        }
        $article->save();
        $article->tags()->sync($request->tags);

        return redirect()->route('articles.show', $article)->with('success', 'Article updated successfully');
    }
    public function filterByCategory(Category $category)
    {
        $featuredTagId = Tag::where('name', 'Featured')->first();
        $featuredArticle = $featuredTagId->articles()->with(['user', 'category', 'tags'])->inRandomOrder()->first();

        $articles = $category->articles()->with(['user', 'category', 'tags'])->latest()->paginate(9);
        return view('articles.index', compact('articles', 'featuredArticle'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
        if (Auth::id() !== $article->user_id || Auth::id() !== 1) {
            abort(403);
        }

        $article->delete();
        return redirect()->route('articles.show')->with('success', 'Article deleted successfully');
    }
}
