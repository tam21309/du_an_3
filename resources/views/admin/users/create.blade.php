@extends('layouts.admin')
@section('content')
<div class="pagetitle">
   <h1>Thêm Mới Nhân Viên</h1>
</div>
<section class="section">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-lg-12">
                     <form action="{{route('users.store')}}" method = 'post'>
                        @csrf
                        <div class="mb-3">
                           <label for="fname" class="form-label">Name:</label>
                           <input type="text" id="fname" name="name" class="form-control" value="">
                           @error('name')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Address:</label>
                           <input type="text" id="fname" name="address" class="form-control" value="">
                           @error('address')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Phone:</label>
                           <input type="text" id="fname" name="phone" class="form-control" value="">
                           @error('phone')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Email:</label>
                           <input type="text" id="fname" name="email" class="form-control" value="">
                           @error('email')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Password:</label>
                           <input type="text" id="fname" name="password" class="form-control" value="">
                           @error('password')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="fname" class="form-label">Birthday:</label>
                           <input type="text" id="fname" name="birthday" class="form-control" value="">
                           @error('birthday')
                           <div class=" form-text text-danger">{{ $message }}</div>
                           @enderror
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