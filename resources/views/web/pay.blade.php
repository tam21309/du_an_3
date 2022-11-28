@extends('layouts.web')
@section('content')
<div class="Checkout_section">
    <div class="container">
        <form action="{{route('web.xu_li_thanh_toan')}}" method="post">
            @csrf
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                        <h3>Billing Details</h3>
                        <div class="row">

                            <div class="col-lg-6 mb-20">
                                <label>Name <span>*</span></label>
                                <input type="text" name="name">
                            </div>
                            {{-- <div class="col-12 mb-20">
                                <label for="country">country <span>*</span></label>
                                <select class="select_option" name="cuntry" id="country">
                                    <option value="2">bangladesh</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>

                                </select>
                            </div> --}}

                            <div class="col-12 mb-20">
                                <label>Street address <span>*</span></label>
                                <input placeholder="House number and street name" type="text" name="address">
                            </div>
                            {{-- <div class="col-12 mb-20">
                                <label>Town / City <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="col-12 mb-20">
                                <label>State / County <span>*</span></label>
                                <input type="text">
                            </div> --}}
                            <div class="col-lg-6 mb-20">
                                <label>Phone<span>*</span></label>
                                <input type="text" name="phone">

                            </div>
                            {{-- <div class="col-lg-6 mb-20">
                                <label> Email Address <span>*</span></label>
                                <input type="text">

                            </div> --}}
                            {{-- <div class="col-12 mb-20">
                                <input id="account" type="checkbox" data-bs-target="createp_account" />
                                <label for="account" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-controls="collapseOne">Create an account?</label>

                                <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                    <div class="card-body1">
                                        <label> Account password <span>*</span></label>
                                        <input placeholder="password" type="password">
                                    </div>
                                </div>
                            </div> --}}
                            
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea id="order_note"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                        <h3>Your order</h3>
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
                                        $qty = $cart[$product->id];
                                        $total += $product->price * $qty;
                                         ?>
                                        <tr>
                                            <td>{{$product->name}}<strong> × {{$qty}}</strong></td>
                                            <td>{{$product->price * $qty}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                        
                                </thead>
                                <tfoot>
                                    {{-- <tr>
                                        <th>Cart Subtotal</th>
                                        <td>$215.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>$5.00</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>$220.00</strong></td>
                                    </tr> --}}
                                </tfoot>
                            </table>
                        </div>
                            <div class="order_button">
                                <button type="submit">Proceed to PayPal</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>