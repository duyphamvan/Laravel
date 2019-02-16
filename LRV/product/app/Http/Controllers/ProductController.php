<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = $request->product;
        $price = $request->price;
        $percent = $request->percent;
        $result = $price*$percent*0.01;
        $newPrice = $price - $result;
        return view('display', compact('product','price','percent','newPrice'));
    }






}
