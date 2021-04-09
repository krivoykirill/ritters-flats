<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function applyForm(Request $request){

        $response = Http::asForm()->post('https://api.trello.com/1/cards/', [
            'key' => config('services.trello.key'),
            'token' => config('services.trello.token'),
            'idList' => '6060f290c9eefb325aafd46b',
            'name' => date("d-m-Y H:i:s").' '.$request->full_name,
            'desc' => $request->town.', '.$request->district.', '.$request->building_type.', '.$request->area.'m2, '.' '.$request->phone,
            'pos'=>'top'
        ]);

        if ($request->lang =='lv'){
            return redirect('lvsuccess');
        } else {
            return redirect('rusuccess');
        }
    }
}
