<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::paginate(3);
        return view ('admin.products.index',compact('items'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view ('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required',
            'desc' => 'required',
        ],[
            'required'=>'Trường Bắt Buộc',
        ]);
        $objProduct = new Product();
        $objProduct->name = $request->name;
        $objProduct->price = $request->price;
        $objProduct->description = $request->desc;
        $objProduct->status = $request->status;
        $objProduct->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads', $image->getClientOriginalName());
            $objProduct->image = 'uploads/'.$image->getClientOriginalName();
        }
        
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        $objProduct->save();
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('products.index');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required',
        ],[
            'required'=>'Trường Bắt Buộc',
        ]);
        $objProduct = Product::find($id);
        $objProduct->name = $request->name;
        $objProduct->price = $request->price;
        $objProduct->description = $request->desc;
        $objProduct->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads', $image->getClientOriginalName());
            $objProduct->image = 'uploads/'.$image->getClientOriginalName();
        }
        try {
            $objProduct->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
        Session::flash('success', __('messages.update_ok'));
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product  = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');

    }

    public function forceDelete($id){
        $product = Product::onlyTrashed()->find($id);
        $product->forceDelete();
        return redirect()->route('admin.garbage');
        
    }

    public function restore($id){
        $product = Product::onlyTrashed()->find($id);
        $product->restore();
        return redirect()->route('admin.garbage');
    }

    public function Garbage(){
        $products = Product::onlyTrashed()->paginate(3);
        return view('admin.products.garbage',compact('products'));
    }

    public function export() 
    {
    return Excel::download(new ProductsExport, 'products.xlsx');
    }
}
