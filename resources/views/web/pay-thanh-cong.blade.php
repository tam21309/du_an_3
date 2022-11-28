@extends('layouts.web')
@section('content')
<div class="Checkout_section">
   <div class="container">
      <form action="{{route('web.xu_li_thanh_toan')}}" method="post">
         @csrf
         <div class="checkout_form">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <h2>PAGE PAY</h2>
                  <div class="row">
                     <div class="col-lg-6 mb-20">
                        <label>Name <span>*</span></label>
                        <p>{{$customer->name}}</p>
                     </div>
                     <div class="col-12 mb-20">
                        <label>Street address <span>*</span></label>
                        <p>{{$customer->address}}</p>
                     </div>
                     <div class="col-lg-6 mb-20">
                        <label>Phone<span>*</span></label>
                        <p>{{$customer->phone}}</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12">
                   <div class="order_table table-responsive">
                      <table>
                         <thead>
                            <tr>
                               <th>Product</th>
                               <th>Total</th>
                            </tr>
                         <tbody>
                            <?php 
                               $total = 0;
                               ?>
                            @foreach ($products as $product )
                            <?php
                               $qty = 1;
                               $total += $product->price * $qty;
                                ?>
                            <tr>
                               <td>{{$product->name}}<strong> × {{$qty}}</strong></td>
                               <td>{{$product->price * $qty}}</td>
                            </tr>
                            @endforeach
                         </tbody>
                         </thead>
                      </table>
                   </div>
                  <h1>SUCCESSFUL PAY</h1>
               </div>
            </div>
         </div>
      </form>
    </div>
</div>