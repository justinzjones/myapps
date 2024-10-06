<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\BlogController;

use Illuminate\Http\Request;

class BlogController extends Controller
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
        $url = 'http://localhost:8055/items/posts/?fields=id,title,content,image,date_created,fk_author.last_name,fk_author.first_name,fk_author.avatar';
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $posts = json_decode(($response->getBody()->getContents()));
        // dd($posts);
        return view('blog_posts')->with('posts', $posts);
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
    public function show(string $id)
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
        $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=id,title,content,date_created,fk_author.last_name,fk_author.first_name';
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $post = json_decode(($response->getBody()->getContents()));
        // dd($post);
        // $post = $post_tmp2['data'];
        // dd($post);
        return view('blog_post')->with('post', $post);
        // dd($this->body);
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
