<?php

namespace App\Http\Controllers;

use App\Mail\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class api extends Controller
{
    public function index(){
        $url = "https://api.ratecard.io/v1/reports";

        $response = Http::withToken(config('app.ratecard_token'))->get($url);

        //ddd($response->json());

        $data = $response->json();

        return view('json', $data);
    }

    public function show(Request $request, $id){

        $url = "https://api.ratecard.io/v1/reports/$id";
        $response = Http::withToken(config('app.ratecard_token'))->get($url);
        $data = $response->json();

        //ddd($data);

        return view('showjson', $data);
    }

    public function mail($id){
        return (new report($id))->build();
    }
}
