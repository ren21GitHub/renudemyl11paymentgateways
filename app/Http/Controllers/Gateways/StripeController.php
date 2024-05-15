<?php

namespace App\Http\Controllers\Gateways;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function payment(Request $request)
    {
        // dd($request->all());

        Stripe::setApiKey(config('stripe.sk'));

        $response = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'gimme money!!!!!',
                        ],
                        'unit_amount' => $request->price * 100, // $40 = 4000cents
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
        ]);

        return redirect()->away($response->url);
    }

    public function success()
    {
        return 'Yehey, It works !!!!!';
    }

    public function cancel()
    {
        return 'Payment cancel';
    }
}
