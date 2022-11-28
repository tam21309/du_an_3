@extends('layouts.admin')
@section('content')
<div class="pagetitle">
   <h1>Thêm Mới Sản Phẩm</h1>
</div>
<section class="section">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-lg-12">
                     <form action="{{route('products.store')}}" method = 'post' enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                           <label for="fname" class="form-label">Name:</label>
                           <input type="text" id="fname" name="name" class="form-control" value="">
                           @error('name')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Image:</label>
                           <input type="file" id="fname" name="image" class="form-control" value="">
                           @error('image')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Price:</label>
                           <input type="number" id="fname" name="price" class="form-control" value="">
                           @error('price')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Description:</label>
                           <textarea name="desc" class="form-control"></textarea>
                           @error('desc')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="fname" class="form-label">Danh Mục:</label>
                            <select name="category_id" class="form-control" id="inputGroupSelect02">
                            @foreach ($categories as $category)
                              <option  value="{{$category->id}}">{{$category->name}} </option>
                            @endforeach
                            </select>
                         </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Status:</label>
                           <select name="status" class="form-control" id="inputGroupSelect02">
                              <option  value="1">Active </option>
                              <option value="0">No Active</option>
                           </select>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-info">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection