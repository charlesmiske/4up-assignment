<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\lists;
use App\Models\characterList;



class LotrController extends Controller
{
    //
    private $bearer;

    public function __construct()
    {
        $this->bearer = env('LOTRAPI');   
    }

    public function index()
    {
        $url = 'https://the-one-api.dev/v2/character?limit=20';
        $client = new Client(['headers' => ['Authorization' => 'Bearer ' . $this->bearer]]);

        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        return view('character', ['characterData' => $data['docs']]);
        //  print_r($data['docs']);
    }

    public function filter(Request $request)
    {
        $url = 'https://the-one-api.dev/v2/character?name=/' . $request->name . '/i&limit=20';
        $client = new Client(['headers' => ['Authorization' => 'Bearer ' . $this->bearer]]);

        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        return view('character', ['characterData' => $data['docs']]);
    }

}
