<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show_region(string $id)
    {
        // dd($id);
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://localhost:8055/items/countries?ISO_31661_alpha2='.$id;
        // $url = 'http://localhost:8055/items/countries?filter[ISO_31661_alpha2][_eq]='.$id;
        $url = 'http://localhost:8055/items/regions/'.$id;
        // dd($url);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $region = json_decode(($response->getBody()->getContents()));
        // dd($region);

        return view('region')->with('region', $region);

    }

    public function show_country(string $id)
    {
        $ISO_31661_alpha2 = $id;
        // dd($id);
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://localhost:8055/items/countries?ISO_31661_alpha2='.$id;
        // $url = 'http://localhost:8055/items/countries?filter[ISO_31661_alpha2][_eq]='.$id;
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=id,title,content,date_created,fk_author.last_name,fk_author.first_name';

        $url = 'http://localhost:8055/items/countries/'.$ISO_31661_alpha2.'/?fields=ISO_31661_alpha2,name,intro,hero,
                activities.name,activities.description,activities.activity_image,
                itineraries.name,itineraries.description,itineraries.duration,itineraries.image,
                fk_region.id,fk_region.name,
                fk_place.id,fk_place.name,fk_place.intro,fk_place.hero
                ';
        
        // dd($url);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $country = json_decode(($response->getBody()->getContents()));
        // dd($country);

        return view('destination')->with('country', $country);

    }

    public function show_place(string $id)
    {
        // $ISO_31661_alpha2 = $id;
        // dd($id);
        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
        // $url = 'http://localhost:8055/items/posts/'.$id.'/?fields=*,author.first_name,author.last_name,author.photo';
        // $url = 'http://localhost:8055/items/countries?ISO_31661_alpha2='.$id;
        // $url = 'http://localhost:8055/items/countries?filter[ISO_31661_alpha2][_eq]='.$id;
        // $url = 'http://localhost:8055/items/places/'.$id;
        $url = 'http://localhost:8055/items/places/'.$id.'/?fields=id,name,intro,hero,fk_country.ISO_31661_alpha2,fk_country.name,fk_country.fk_region.id,fk_country.fk_region.name';
        // dd($url);
        
        $response = $client->request('GET', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ]
        // 'body' => $json_rq
        ]);
        
        //get the content from the body of the response
        // dd(json_decode(($response->getBody()->getContents())));
        // $post_tmp = $response->getBody()->getContents();
        $place = json_decode(($response->getBody()->getContents()));
        // dd($place);

        return view('place')->with('place', $place);

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
