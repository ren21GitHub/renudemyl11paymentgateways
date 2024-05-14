<?php

use App\Http\Controllers\Gateways\PaypalController;
use Illuminate\Support\Facades\Route;
use Srmklive\PayPal\PayPalFacadeAccessor;

Route::get('/', function () {
    return view('welcome');
});

// Gateways Paypal
Route::post('paypal/payment', [PaypalController::class, 'payment'])->name('paypal.payment');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal.success');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal.cancel');
