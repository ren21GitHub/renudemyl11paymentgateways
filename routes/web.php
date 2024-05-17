<?php

use App\Http\Controllers\Gateways\InstamojoController;
use App\Http\Controllers\Gateways\MollieController;
use App\Http\Controllers\Gateways\PaypalController;
use App\Http\Controllers\Gateways\RazorpayController;
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

// RazorPay Gateways
Route::post('razorpay/payment', [RazorpayController::class, 'payment'])->name('razorpay.payment');
Route::get('razorpay/success', [RazorpayController::class, 'success'])->name('razorpay.success');
Route::get('razorpay/cancel', [RazorpayController::class, 'cancel'])->name('razorpay.cancel');

// Instamojo Gateways
Route::post('instamojo/payment', [InstamojoController::class, 'payment'])->name('instamojo.payment');
Route::get('instamojo/callback', [InstamojoController::class, 'callback'])->name('instamojo.callback');
Route::get('instamojo/cancel', [InstamojoController::class, 'cancel'])->name('instamojo.cancel');

// Mollie Gateways
Route::post('mollie/payment', [MollieController::class, 'payment'])->name('mollie.payment');
Route::get('mollie/success', [MollieController::class, 'success'])->name('mollie.success');
