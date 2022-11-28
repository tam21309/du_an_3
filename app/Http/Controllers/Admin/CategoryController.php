<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $items = Category::paginate(3);
        return view ('admin.categories.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.categories.create');
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
            'name' => 'required|unique:categories|max:255',
            'desc' => 'required',
        ],[
            'required'=>'Trường Bắt Buộc',
        ]);
        $objCategory = new Category();
        $objCategory->name = $request->name;
        $objCategory->description = $request->desc;
        $objCategory->status = $request->status;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads', $image->getClientOriginalName());
            $objCategory->image = 'uploads/'.$image->getClientOriginalName();
        }
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        $objCategory->save();
        Session::flash('success', 'Sửa thành công');
        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = $_GET['id'];
            $objCategory = new Category();
            $item = $objCategory->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        return view('admin.categories.edit',compact('category'));
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
        $objCategory = Category::find($id);
        $objCategory->name = $request->name;
        $objCategory->description = $request->desc;
        $objCategory->status = $request->status;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move('uploads', $image->getClientOriginalName());
            $objCategory->image = 'uploads/'.$image->getClientOriginalName();
        }
        $objCategory->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category  = Category::find($id);
        $category->delete();
        // return view('admin.categories.delete',compact('category'));
    }
}
