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
        $url = "{$this->baseUrl}?fields=*,featured_image,category.name,category.color,author.first_name,author.last_name,author.avatar";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_news()
    {
        $url = "{$this->baseUrl}?fields=*,featured_image,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=news";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_travel()
    {
        $url = "{$this->baseUrl}?fields=*,featured_image,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=travel";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_aviation()
    {
        $url = "{$this->baseUrl}?fields=*,featured_image,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=aviation";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_markets()
    {
        $url = "{$this->baseUrl}?fields=*,featured_image,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=markets";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function index_history()
    {
        $url = "{$this->baseUrl}?fields=*,featured_image,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=history";
        $articles = $this->fetchArticles($url);

        return view('home', ['articles' => $articles]);
    }

    public function show(string $category, string $article)
    {
        $url = "{$this->baseUrl}/{$article}?fields=id,title,content,date_created,featured_image,image,category.name,author.last_name,author.first_name,author.avatar";
        
        Log::info("Fetching article", ['url' => $url]);
        $response = Http::get($url);

        if ($response->failed() || !$response->json('data')) {
            Log::error("Article not found", ['id' => $article, 'status' => $response->status()]);
            abort(404, 'Article not found');
        }

        $articleData = json_decode(json_encode($response->json('data')));

        if (strtolower($category) !== strtolower($articleData->category->name)) {
            Log::info("Redirecting to correct category", [
                'requested' => $category, 
                'actual' => $articleData->category->name
            ]);
            
            return redirect()->route('articles.show', [
                'category' => strtolower($articleData->category->name),
                'article' => $articleData->id,
            ]);
        }

        // First try to fetch related articles from the same category
        $relatedUrl = "{$this->baseUrl}?fields=id,title,content,date_created,featured_image,image,category.name&filter[category][name][_contains]={$articleData->category->name}&filter[id][_neq]={$article}&sort=-date_created&limit=3";
        
        Log::info("Fetching related articles", ['url' => $relatedUrl]);
        $related_articles = $this->fetchArticles($relatedUrl);

        // If no related articles found, fetch recent articles from any category
        if (empty($related_articles)) {
            Log::info("No related articles found, fetching recent articles instead");
            $recentUrl = "{$this->baseUrl}?fields=id,title,content,date_created,featured_image,image,category.name&filter[id][_neq]={$article}&sort=-date_created&limit=3";
            $related_articles = $this->fetchArticles($recentUrl);
        }

        return view('article', [
            'article' => $articleData,
            'category' => $category,
            'related_articles' => $related_articles,
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