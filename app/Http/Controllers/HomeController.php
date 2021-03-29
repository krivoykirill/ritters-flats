<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function applyForm(Request $request){

        // dd($request->all());

        $response = Http::asForm()->post('https://api.trello.com/1/cards/', [
            'key' => config('services.trello.key'),
            'token' => config('services.trello.token'),
            'idList' => '6060f290c9eefb325aafd46b',
            'name' => date("d-m-Y H:i:s").' '.$request->full_name,
            'desc' => $request->town.'%0D%0A'.$request->district.'%0D%0A'.$request->building_type.'%0D%0A'.$request->area.'%0D%0A'.'%0D%0A'.$request->phone,
            'pos'=>'top'
        ]);
        dd($response);
    }
}
