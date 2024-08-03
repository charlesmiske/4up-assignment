<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LotrController extends Controller
{
    //
    public function getCharacter()
    {
        $bearer = env('LOTRAPI');
        $url = 'https://the-one-api.dev/v2/character?limit=20';
        $client = new Client(['headers' => ['Authorization' => 'Bearer ' . $bearer]]);

        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        return view('character', ['characterData' => $data['docs']]);
        //  print_r($data['docs']);
    }
}
