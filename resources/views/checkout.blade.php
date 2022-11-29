@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{ asset('checkoutpage.css') }}">

<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="/checkout_page.php">

                <div class="row">
                    <h2>Checkout</h2>
                    <h3>Billing Address</h3>
                    <label for="fullname"><i class="fa fa-user"></i>Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Richard Roe">
                    <label for="email"><i class="fa fa-email"></i>Email</label>
                    <input type="email" id="email" name="email" placeholder="richard@example.com">
                    <label for="address"><i class="fa fa-address"></i>Address</label>
                    <input type="text" id="address" name="address" placeholder="123 Fifth Avenue">
                    <label for="city"><i class="fa fa-city"></i>City</label>
                    <input type="text" id="city" name="city" placeholder="London">

                    <div class="row">
                        <div class="col-50">
                            <label for="county">County</label>
                            <input type="text" id="county" name="county" placeholder="West Midlands">
                        </div>
                        <div class="col-50">
                            <label for="postcode">Postcode</label>
                            <input type="text" id="postcode" name="postcode" placeholder="B4 7ET">
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fullname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cardname">Name on Card</label>
                        <input type="text" id="cardname" name="cardname" placeholder="Richard Roe">
                        <label for="cardno">16-digit Number</label>
                        <input type="text" id="cardno" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Expiry Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="November">

                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Expiry Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2025">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="123">
                            </div>
                        </div>
                    </div>
                </div>

                <label>
                    <input type="checkbox" checked="checked" name="sameaddress"> Shipping Address same as Billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>

    <div class="col-25">
        <div class="container">
            <h4>Cart
                <span class="price" style="color:black">
                    <i class="fa fa-shopping-cart"></i>
                    <b>4</b>
                </span>
            </h4>
            <p><a href="#">Product 1</a> <span class="price">$15</span></p>
            <p><a href="#">Product 2</a> <span class="price">$5</span></p>
            <p><a href="#">Product 3</a> <span class="price">$8</span></p>
            <p><a href="#">Product 4</a> <span class="price">$2</span></p>
            <hr>
            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
        </div>
    </div>
</div>




@endsection
