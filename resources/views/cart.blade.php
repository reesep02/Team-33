
@extends('layouts.app')


@section('content')
<section class="Shopping Cart">
    <div class="container">
            <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                            <div class="header" style="padding-top: 7em;padding-bottom: 2em; ">
                                    <h1>Shopping Cart</h1>
                            </div>
                    </div>
            </div>

<section id="cart-container" class="container my-5">
    <table width="100%">
        <thead>
            <tr>
                <td><h3></h3></td>
                <td><h3></h3></td>
                <td><h3>Product</h3></td>
                <td><h3>Price</h3></td>
                <td><h3>Quantity</h3></td>
                <td><h3>Total</h3></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button class="remove-product"> Remove </button></td>
                <td><img class="img-fluid" src="images/wedding.jpg" alt="genders"></td>
                <td><h4>Product Name</h4></td>
                <td>300£</td>
                <td><input class="w-25 pl-1" value="1" type = "number"></td>

            </tr>
        </tbody>

    </table>
</section>




@endsection
