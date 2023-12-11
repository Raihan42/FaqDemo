<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ShopController extends Controller
{
    public function ShopInfo(Request $request)
    {
        

$shop = Auth::user();
$data = $shop->api()->rest('GET','/admin/api/2023-10/shop.json');


$shopName = $data['body']['shop']['name'];
$shopId = $data['body']['shop']['id'];


return view('shop.view',compact('shopName','shopId'));



    }
}
