
@extends('layouts.app')


@section('content')
@guest
    <h1 style="padding: 5rem">Please Login to access your cart</h1>
@else
    <section class="Shopping Cart">
        <div class="container">
                <div class="row justify-content-center text-center">
                        <div class="col-md-8 col-lg-6">
                                <div class="header" style="padding-top: 7em;padding-bottom: 2em; ">
                                        <h1>Shopping Cart</h1>
                                </div>
                                @if (session()->has('success_message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success_message') }}
                                    </div>
                                @endif

                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (Cart::count() > 0)
                                    <h4>{{Cart::count() }} item(s) in Shopping Cart</h4>
                        </div>
                </div>
                                <section id="cart-container" class="container my-5">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td><h3></h3></td>
                                                <td><h3></h3></td>
                                                <td><h3></h3></td>
                                                <td><h3>Product</h3></td>
                                                <td><h3>Price</h3></td>
                                                <td><h3>Quantity</h3></td>
                                                <td><h3>Total</h3></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::content() as $item)
                                            <tr>
                                                {{-- <td><button class="remove-product"> Remove </button></td> --}}
                                                <td><form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit">Remove</button>
                                                </form></td>
                                                <td><button class="remove-product"> Save for later </button></td>
                                                <td><a href="{{ route('shop.show', $item->model->name) }}"><img class="img-fluid" src="images/wedding.jpg" alt="image"></td></a>
                                                <td><a href="{{ route('shop.show', $item->model->name) }}"><h4>{{ $item->model->name ?? 'None' }}</h4></td></a>
                                                <td>{{ $item->model->presentPrice() }}</td>
                                                <td><input class="w-25 pl-1" value="1" type = "number"></td>
                                            @endforeach
                                                <td>SubTotal {{ presentPrice(Cart::subtotal()) }} ..
                                                    Tax {{ presentPrice(Cart::tax()) }} ..
                                                    Total With 20% VAT {{ presentPrice(Cart::total()) }}
                                                </td>
                                            </tr>


                                        </tbody>


                                    </table>
                                </section>
                                @else
                                <h3>No items in Cart!</h3>
                                <h3><a href="{{url('/')}}">Continue Shopping</a><h3>

                                @endif

@endguest


{{-- <td>SubTotal {{ presentPrice(Cart::subtotal()) }} ..
    Tax {{ presentPrice(Cart::tax()) }} ..
    Total With 20% VAT {{ presentPrice(Cart::total()) }}
</td> --}}


@endsection
