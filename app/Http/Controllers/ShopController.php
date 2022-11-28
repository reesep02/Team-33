<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Shop::all();

        return view('shop')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param string $name
     *
     * @return use Illuminate\Http\Response
     *
     */

    public function show($name)
    {
        $product = Shop::where('name', $name)->firstOrFail();

        return view('product')->with('product', $product);
    }

}
