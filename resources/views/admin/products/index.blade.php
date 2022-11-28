@extends('layouts.admin')
@section('content')
<div class="pagetitle">
    <h1>Sản Phẩm</h1>
 </div>
 <section class="section">
    <div class="row">
       <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-10">

            </div>
            <div class="col-lg-2">
                <a class="btn btn-primary btn-block" href="{{route('products.create')}}"> Thêm Mới</a>
                <a class="btn btn-primary btn-block" href="{{route('admin.garbage')}}">Thùng Rác</a>
                <a class="btn btn-primary btn-block" href="{{route('admin.export')}}">Xuất Excel</a>
            </div>
        </div>
          <div class="card">
             <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Image</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Danh Mục</th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($items as $item )
                              <tr>
                                 <th scope="row">{{$item->id}}</th>
                                 <td><img width="150" src="/{{$item->image}}" alt=""></td>
                                 <td>{{$item->name}}</td>
                                 <td>{{$item->price}}</td>
                                 <td>{{$item->category->name}}</td>
                                 <td>@if($item->status == 1)
                                 <span>
                                    Active
                                 </span>
                                 @else
                                 <span>
                                    No Active
                                 </span>
                                 @endif
                              </td>
                              <td>
                               <a href="{{route('products.edit',$item->id)}}" class="btn btn-info">Edit</a>
                               <form action="{{route('products.destroy',$item->id)}}" method="post">
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