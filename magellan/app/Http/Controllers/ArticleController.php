<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        // $url = 'http://localhost:8055/items/posts/'.$id;
        // $url = 'http://localhost/wp/v2/posts/'.$id;
        // $url = 'http://wp-magellan.localhost/wp-json/wp/v2/posts/'.$id;
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://0.0.0.0:8055/items/articles/'.'?fields=*,category.categoryColor';
        $url = 'http://0.0.0.0:8055/items/articles?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar';
  
        // $categoryUrl = 'http://0.0.0.0:8055/items/categories?fields=name'; // Replace with your categories endpoint
        // $categoryResponse = $client->request('GET', $categoryUrl);
        // $categories = json_decode($categoryResponse->getBody()->getContents())->data;
        // dd($categories);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $articles = json_decode(($response->getBody()->getContents()));
        $articles = $articles->data;
        // dd($articles);
        return view('home')->with([
            'articles' => $articles
        ]);
    }

    public function index_news()
    {
        //
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        // $url = 'http://localhost:8055/items/posts/'.$id;
        // $url = 'http://localhost/wp/v2/posts/'.$id;
        // $url = 'http://wp-magellan.localhost/wp-json/wp/v2/posts/'.$id;
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://0.0.0.0:8055/items/articles/'.'?fields=*,category.categoryColor';
        $url = 'http://0.0.0.0:8055/items/articles?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=news';
  
        // $categoryUrl = 'http://0.0.0.0:8055/items/categories?fields=name'; // Replace with your categories endpoint
        // $categoryResponse = $client->request('GET', $categoryUrl);
        // $categories = json_decode($categoryResponse->getBody()->getContents())->data;
        // dd($categories);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $articles = json_decode(($response->getBody()->getContents()));
        $articles = $articles->data;
        // dd($articles);
        return view('home')->with([
            'articles' => $articles,
        ]);
    }

    public function index_travel()
    {
        //
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        // $url = 'http://localhost:8055/items/posts/'.$id;
        // $url = 'http://localhost/wp/v2/posts/'.$id;
        // $url = 'http://wp-magellan.localhost/wp-json/wp/v2/posts/'.$id;
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://0.0.0.0:8055/items/articles/'.'?fields=*,category.categoryColor';
        $url = 'http://0.0.0.0:8055/items/articles?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=travel';
  
        // $categoryUrl = 'http://0.0.0.0:8055/items/categories?fields=name'; // Replace with your categories endpoint
        // $categoryResponse = $client->request('GET', $categoryUrl);
        // $categories = json_decode($categoryResponse->getBody()->getContents())->data;
        // dd($categories);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $articles = json_decode(($response->getBody()->getContents()));
        $articles = $articles->data;
        // dd($articles);
        return view('home')->with([
            'articles' => $articles,
        ]);
    }

  
    public function index_aviation()
    {
        //
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        // $url = 'http://localhost:8055/items/posts/'.$id;
        // $url = 'http://localhost/wp/v2/posts/'.$id;
        // $url = 'http://wp-magellan.localhost/wp-json/wp/v2/posts/'.$id;
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://0.0.0.0:8055/items/articles/'.'?fields=*,category.categoryColor';
        $url = 'http://0.0.0.0:8055/items/articles?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=aviation';
  
        // $categoryUrl = 'http://0.0.0.0:8055/items/categories?fields=name'; // Replace with your categories endpoint
        // $categoryResponse = $client->request('GET', $categoryUrl);
        // $categories = json_decode($categoryResponse->getBody()->getContents())->data;
        // dd($categories);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $articles = json_decode(($response->getBody()->getContents()));
        $articles = $articles->data;
        // dd($articles);
        return view('home')->with([
            'articles' => $articles,
        ]);
    }  
  
    public function index_markets()
    {
        //
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        // $url = 'http://localhost:8055/items/posts/'.$id;
        // $url = 'http://localhost/wp/v2/posts/'.$id;
        // $url = 'http://wp-magellan.localhost/wp-json/wp/v2/posts/'.$id;
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://0.0.0.0:8055/items/articles/'.'?fields=*,category.categoryColor';
        $url = 'http://0.0.0.0:8055/items/articles?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=markets';
  
        // $categoryUrl = 'http://0.0.0.0:8055/items/categories?fields=name'; // Replace with your categories endpoint
        // $categoryResponse = $client->request('GET', $categoryUrl);
        // $categories = json_decode($categoryResponse->getBody()->getContents())->data;
        // dd($categories);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $articles = json_decode(($response->getBody()->getContents()));
        $articles = $articles->data;
        // dd($articles);
        return view('home')->with([
            'articles' => $articles,
        ]);
    }  

    public function index_history()
    {
        //
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        // $url = 'http://localhost:8055/items/posts/'.$id;
        // $url = 'http://localhost/wp/v2/posts/'.$id;
        // $url = 'http://wp-magellan.localhost/wp-json/wp/v2/posts/'.$id;
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://0.0.0.0:8055/items/articles/'.'?fields=*,category.categoryColor';
        $url = 'http://0.0.0.0:8055/items/articles?fields=*,category.name,category.color,author.first_name,author.last_name,author.avatar&filter[category][name][_eq]=history';
  
        // $categoryUrl = 'http://0.0.0.0:8055/items/categories?fields=name'; // Replace with your categories endpoint
        // $categoryResponse = $client->request('GET', $categoryUrl);
        // $categories = json_decode($categoryResponse->getBody()->getContents())->data;
        // dd($categories);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $articles = json_decode(($response->getBody()->getContents()));
        $articles = $articles->data;
        // dd($articles);
        return view('home')->with([
            'articles' => $articles,
        ]);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $category, string $id)
    {
        // Headers for the request
        $headers = [
            'Content-Type' => 'application/json',
        ];
    
        // Guzzle HTTP Client
        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
    
        // Build the API request URL
        $url = 'http://localhost:8055/items/articles/' . $id . '/?fields=id,title,content,date_created,category.name,author.last_name,author.first_name,author.avatar';
        
        // Make the GET request to the API
        $response = $client->request('GET', $url, [
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);
    
        // Get the content from the response and decode it
        $article = json_decode($response->getBody()->getContents());
        $article = $article->data;
    
        // Ensure the category in the URL matches the article's actual category
        if (strtolower($category) !== strtolower($article->category->name)) {
            // Optionally handle mismatches by redirecting or returning a 404
            return redirect()->route('articles.show', [
                'category' => strtolower($article->category->name),
                'id' => $article->id,
            ]);
        }
    
        // Return the article view and pass the article and category to the view
        return view('article', [
            'article' => $article,  // Pass the article object
            'category' => $category,  // Pass the category name from the URL
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
