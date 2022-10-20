<?php

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Quote;
use App\Models\Receipt;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard/clients', function () {
    $customers = Customer::all();
    return view('customers.index', compact('customers'));
});
Route::get('/dashboard/ajouter-client', function () {
    $customers = Customer::all();
    return view('customers.add-customer', compact('customers'));
});


Route::get('/dashboard/produits', function () {
    $products = Product::all();
    return view('products.index', compact('products'));
});


Route::get('/dashboard/factures', function () {
    $invoices = Invoice::latest()->get();
    return view('invoices.index', compact('invoices'));
});

Route::get('/dashboard/devis', function () {
    $quotes = Quote::latest()->get();
    return view('quotes.index', compact('quotes'));
});

Route::get('/dashboard/bons-commande', function () {
    $orderReceipts = Receipt::latest()->where('type', 'order')->get();
    return view('order-receipts.index', ['receipts' => $orderReceipts]);
});

Route::get('/dashboard/bons-livraison', function () {
    $deliveryReceipts = Receipt::latest()->where('type', 'delivery')->get();
    return view('delivery-receipts.index', ['receipts' => $deliveryReceipts]);
});
