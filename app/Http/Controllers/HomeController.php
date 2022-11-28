<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::take(4)
        ->get();
        $products = Product::orderBy('id', 'desc')
        ->take(8)
        ->get();

        // dd($products->toArray());

        $params = [
            'categories' => $categories,
            'products' => $products
        ];

        return view('web.home',$params);
    }
}
