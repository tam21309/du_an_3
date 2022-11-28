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
                <a class="btn btn-primary btn-block" href="{{route('products.index')}}">Trở Về</a>
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
                              @foreach ($products as $item )
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
                               <a href="{{route('admin.restore',$item->id)}}" class="btn btn-info">Khôi Phục</a>
                               <form action="{{route('admin.forceDelete',$item->id)}}" method="post">
                                 @csrf
                                 @method('delete') 
                                 <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Xóa Luôn</button>
                              </form>
                              </td>
                              </tr>
                              @endforeach
                            </tbody>
                         </table>
                         {{ $products->links(); }}
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection