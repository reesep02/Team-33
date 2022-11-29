
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
                                                <td><h4><form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit">Remove</button>
                                                </form></h4></td>
                                                <td><h4><form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit">Save For Later</button>
                                                </form></h4></td>
                                                <td><a href="{{ route('shop.show', $item->model->name) }}"><img class="img-fluid" src="images/wedding.jpg" alt="image"></a></td>
                                                <td><a href="{{ route('shop.show', $item->model->name) }}"><h4>{{ $item->model->name }}</h4></a></td>
                                                <td><h4>{{ $item->model->presentPrice() }}</h4></td>
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
                                    <h3><a href="{{url('/')}}">Continue Shopping</a><h3>
                                 @else
                                 <h3>No items in Cart!</h3>
                                 <h3><a href="{{url('/')}}">Continue Shopping</a><h3>
                                 @endif
                                    @if (Cart::instance('saveForLater')->count() > 0)
                                 <h4>{{Cart::instance('saveForLater')->count() }} Item(s) Saved For Later</h4>
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
                                                @foreach ( Cart::instance('saveForLater')->content() as $item )
                                                <tr>
                                                    <td><h4><form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit">Remove</button>
                                                    </form></h4></td>
                                                    <td><h4><form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <button type="submit">Move To Cart</button>
                                                    </form></h4></td>
                                                    <td><h4><a href="{{ route('shop.show', $item->model->name) }}"><img class="img-fluid" src="images/wedding.jpg" alt="image"></a></h4></td>
                                                    <td><h4><a href="{{ route('shop.show', $item->model->name) }}"><h4>{{ $item->model->name }}</a></h4></td>
                                                    <td><h4>{{ $item->model->presentPrice() }}</h4></td>
                                                    <td><h3></h3></td>
                                                    <td><h3></h3></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                    <h3>You have no items saved for later.</h3>
                                    @endif
                                </section>



@endguest


{{-- <td>SubTotal {{ presentPrice(Cart::subtotal()) }} ..
    Tax {{ presentPrice(Cart::tax()) }} ..
    Total With 20% VAT {{ presentPrice(Cart::total()) }}
</td> --}}


@endsection
