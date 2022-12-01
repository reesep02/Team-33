<?php
namespace App\Http\Controllers;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function success()
    {

        return view('thanks');
    }

     public function session(Request $request)
    {

        function calculateOrderAmount(): int {
            return Cart::instance('default')->total();
        }

        $request->validate([
            'payment_method_id' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255'
        ]);

         \Stripe\Stripe::setApiKey(config(key: 'stripe.sk'));


         try {
             if($request->payment_method_id){
                 $intent = \Stripe\PaymentIntent::create([
                     'payment_method' => $request->payment_method_id,
                     'amount' => calculateOrderAmount(),
                     'currency' => 'gbp',
                     'confirmation_method' => 'manual',
                     'confirm' => true,
                 ]);
             }

        Cart::instance('default')->destroy();
         }catch(\Stripe\Exception\ApiErrorException $e){

            return view('thanks');
            success();

         ([
         'error' => $e->getMessage()
         ]);




     }

     return view('thanks');
     success();




        //  $session = \Stripe\Checkout\Session::create([
        //      'line_items' => [
        //          [
        //              'price_data' => [
        //                  'currency' => 'gbp',
        //                  'product_data' => [
        //                      'name' => 'Total Amount With VAT',
        //                  ],
        //                  'unit_amount' => calculateOrderAmount(), //pound 5
        //              ],
        //              'quantity' => 1,
        //          ],
        //      ],
        //      'mode' => 'payment',
        //      'success_url' => route(name:'strip.success'), //route to success method in this controller
        //      'cancel_url' => route(name:'checkout.index')
        //  ]);


    }




    // public function session()
    // {


    //     // This is your test secret API key.
    //     \Stripe\Stripe::setApiKey(config(key: 'stripe.sk'));
    //     $intent = null;
    //     function calculateOrderAmount(): int {
    //         // Replace this constant with a calculation of the order's amount
    //         // Calculate the order total on the server to prevent
    //         // people from directly manipulating the amount on the client
    //         return 1400;
    //     }

    //     header('Content-Type: application/json');

    //     try {
    //         // retrieve JSON from POST body
    //         $jsonStr = file_get_contents('php://input');
    //         $jsonObj = json_decode($jsonStr);

    //         // Create a PaymentIntent with amount and currency
    //         $paymentIntent = \Stripe\PaymentIntent::create([
    //             'amount' => calculateOrderAmount(),
    //             'currency' => 'gbp',
    //             // 'confirmation_method' => 'manual',
    //             // 'confirm' => true,
    //             'automatic_payment_methods' => [
    //                 'enabled' => true,
    //             ],
    //         ]);

    //         $output = [
    //             'clientSecret' => $paymentIntent->client_secret,
    //         ];

    //         echo json_encode($output);
    //     } catch (Error $e) {
    //         http_response_code(500);
    //         echo json_encode(['error' => $e->getMessage()]);
    //     }
    // }
}



