<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserEmail;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::paginate(4);
        return view ('admin.users.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.users.create');
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
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'birthday' => 'required',
        ],[
            'required'=>'Trường Bắt Buộc',
        ]);
        $objUser = new User();
        $objUser->name = $request->name;
        $objUser->address = $request->address;
        $objUser->phone = $request->phone;
        $objUser->email = $request->email;
        $objUser->password = Hash::make($request->password);
        $objUser->birthday = $request->birthday;

        if($objUser->email){
            $email = $objUser->email;   
            $mailData = $objUser;
            try {
                Mail::to($email)->send(new UserEmail($mailData));
            } catch (\Exception $e) {
                Log::error($e->getMessage());
            }
        }

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $image->move('uploads', $image->getClientOriginalName());
        //     $objUser->image = 'uploads/'.$image->getClientOriginalName();
        // }
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        $objUser->save();
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('users.index');
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
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
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
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'birthday' => 'required',
        ],[
            'required'=>'Trường Bắt Buộc',
        ]);
        $objUser = User::find($id);
        $objUser->name = $request->name;
        $objUser->address = $request->address;
        $objUser->phone = $request->phone;
        $objUser->email = $request->email;
        if($objUser->password){
            $objUser->password = Hash::make($request->password);
        }

        $objUser->birthday = $request->birthday;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $image->move('uploads', $image->getClientOriginalName());
        //     $objUser->image = 'uploads/'.$image->getClientOriginalName();
        // }
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        $objUser->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user  = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.checkLogin');
    }

    public function login(Request $request){
        $arr = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($arr)){
            alert()->success('Đăng Nhập','Thành Công');
            return redirect()->route('admin.home');
        }else{
            alert()->error('Đăng Nhập','Không Thành Công');
            return view('auth.login');
        }
    }

    public function checkLogin(){
        if(Auth::check()){
          return redirect()->route('admin.home');
        }else{
            return view('auth.login');
        }
    }
}
