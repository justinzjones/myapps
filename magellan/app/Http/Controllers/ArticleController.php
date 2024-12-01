<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    protected $baseUrl = 'http://0.0.0.0:8055/items/articles';

    public function index()
    {
        $url = "{$this->baseUrl}?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_news()
    {
        $url = "{$this->baseUrl}?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=news";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_travel()
    {
        $url = "{$this->baseUrl}?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=travel";
        $articles = $this->fetchArticles($url);

        return view('home-travel', ['articles' => $articles]);
    }

    public function index_aviation()
    {
        $url = "{$this->baseUrl}?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=aviation";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_markets()
    {
        $url = "{$this->baseUrl}?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=markets";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_history()
    {
        $url = "{$this->baseUrl}?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=history";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function show(string $category, string $id)
    {
        $url = "{$this->baseUrl}/{$id}?fields=id,title,content,date_created,category.name,author.last_name,author.first_name,author.avatar";
        $response = Http::get($url);

        if ($response->failed() || !$response->json('data')) {
            Log::error("Article not found: {$id}");
            abort(404, 'Article not found');
        }

        $article = json_decode(json_encode($response->json('data')));

        if (strtolower($category) !== strtolower($article->category->name)) {
            return redirect()->route('articles.show', [
                'category' => strtolower($article->category->name),
                'id' => $article->id,
            ]);
        }

        return view('article', [
            'article' => $article,
            'category' => $category,
        ]);
    }

    private function fetchArticles(string $url)
    {
        $response = Http::get($url);

        if ($response->failed()) {
            Log::error('Failed to fetch articles', ['url' => $url, 'status' => $response->status()]);
            abort(500, 'Failed to fetch articles');
        }

        // Convert the data array to objects
        $articles = $response->json('data') ?? [];
        return json_decode(json_encode($articles));
    }
}