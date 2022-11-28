<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Customer::paginate(3);
        return view ('admin.customers.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $customer = Customer::all();
        return view ('admin.customers.create');
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
            'name' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required',
            'desc' => 'required',
        ],[
            'required'=>'Trường Bắt Buộc',
        ]);
        $objCustomer = new Customer();
        $objCustomer->name = $request->name;
        $objCustomer->phone = $request->phone;
        $objCustomer->address = $request->address;
        // $objCustomer->category_id = $request->category_id;

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $image->move('uploads', $image->getClientOriginalName());
        //     $objProduct->image = 'uploads/'.$image->getClientOriginalName();
        // }
        
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        $objCustomer->save();
        Session::flash('success', __('messages.add_ok'));
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.edit');
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
            'phone' => 'required',
            'address' => 'required',
            'desc' => 'required',
        ],[
            'required'=>'Trường Bắt Buộc',
        ]);
        $objCustomer = new Customer();
        $objCustomer->name = $request->name;
        $objCustomer->phone = $request->phone;
        $objCustomer->address = $request->address;
        // $objCustomer->category_id = $request->category_id;

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $image->move('uploads', $image->getClientOriginalName());
        //     $objProduct->image = 'uploads/'.$image->getClientOriginalName();
        // }
        
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        $objCustomer->save();
        Session::flash('success', __('messages.update_ok'));
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer  = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
