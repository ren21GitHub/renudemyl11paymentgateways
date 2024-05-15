<?php

use App\Http\Controllers\Gateways\PaypalController;
use App\Http\Controllers\Gateways\StripeController;
use Illuminate\Support\Facades\Route;
use Srmklive\PayPal\PayPalFacadeAccessor;

Route::get('/', function () {
    return view('welcome');
});

// Paypal Gateways
Route::post('paypal/payment', [PaypalController::class, 'payment'])->name('paypal.payment');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal.success');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal.cancel');

// Stripe Gateways
Route::post('stripe/payment', [StripeController::class, 'payment'])->name('stripe.payment');
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe.success');
Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');
