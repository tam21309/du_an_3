@extends('layouts.admin')
@section('content')
<div class="pagetitle">
    <h1>Sửa Danh Mục</h1>
 </div>
 <section class="section">
    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
             
                        <form action="{{route('categories.update',$category->id)}}" method = 'post' enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="fname" class="form-label">Name:</label>
                                <input type="text" id="fname" name="name" class="form-control" value='{{$category->name}}''>
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
                                <label for="fname" class="form-label">Description:</label>
                                @error('name')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                                <textarea name="desc" class="form-control"> {{$category->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="fname" class="form-label">Status:</label>
                                <select name="status" class="form-control" id="inputGroupSelect02">
                                    @if($category->status ==1)
                                        <option selected value="1">Active<table></table></option>
                                        <option value="2">No Active</option>
                                    @else($danhmuc->kichhoat==1)
                                        <option  value="1">Active<table></table></option>
                                        <option selected value="2">No Active</option>
                                    @endif
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