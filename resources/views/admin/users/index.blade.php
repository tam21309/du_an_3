@extends('layouts.admin')
@section('content')
<div class="pagetitle">
    <h1>Quản Lí Nhân Viên</h1>
 </div>
 <section class="section">
    <div class="row">
       <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-10">

            </div>
            <div class="col-lg-2">
                <a class="btn btn-primary btn-block" href="{{route('users.create')}}"> Thêm Mới</a>
            </div>
        </div>
          <div class="card">
             <div class="card-body">

                <div class="row">
                  <div class="col-lg-12">
                     @if (Session::has('success'))
                         <p class="alert alert-success">
                             {{ Session::get('success') }}
                         </p>
                     @endif
                 </div>
                    <div class="col-lg-12">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Address</th>
                                 <th scope="col">Phone</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Birthday</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($items as $item )
                              <tr>
                                 <th scope="row">{{$item->id}}</th>
                                 <td>{{$item->name}}</td>
                                 <td>{{$item->address}}</td>
                                 <td>{{$item->phone}}</td>
                                 <td>{{$item->email}}</td>
                                 <td>{{$item->birthday}}</td>
      
                              <td>
                               <a href="{{route('users.edit',$item->id)}}" class="btn btn-info">Edit</a>
                               <form action="{{route('users.destroy',$item->id)}}" method="post">
                                 @csrf
                                 @method('delete') 
                                 <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</button>
                              </form>
                              </td>
                              </tr>
                              @endforeach
                            </tbody>
                         </table>

                         {{ $items->links(); }}
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection