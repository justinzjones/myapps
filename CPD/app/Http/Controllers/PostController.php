<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $url = 'http://localhost:8055/items/posts/'.$id;
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        // $this->body = "Justin";
        //get the content from the body of the response
        $post_tmp = $response->getBody()->getContents();
        $post_tmp2 = json_decode($post_tmp, true);
        $post = $post_tmp2['data'];
        // dd($post);
        return view('taiga-post')->with('post', $post);
        // dd($this->body);
    }
}
