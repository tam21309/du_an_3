<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id){
        $category = Category::find($id);
        $products = Product::where('category_id','=',$id)->get();
        return view('web.category',compact('products','category'));
    }
}
