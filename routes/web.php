<?php

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

Route::get('/', function () {

    $blanks = DB::table('product_blanks')->get();
    // return $blanks;

    return view('welcome', compact( 'blanks' ));

    // view will be "mega splash page", no navbar
});

Route::get('/blanks/{blanks_id}', function ($blanks_id) {

    $blanks = DB::table('product_blanks')->find($blanks_id);
    
    dd($blanks);

    return view('welcome', compact( 'blanks' ));

    // view will be "mega splash page", no navbar
});





// [] Create controllers for each next
// Remember to use php artisan helper function
// Check how to make a RESOURCES controller*******
Route::get('/dashboard', function () {
    return view('dashboard');
    // view will be "dashboard (logged in)"
});

Route::get('/create-account', function () {
    return view('create-account');
    // view will be "create account" screen, not sure what navbar
});

Route::get('/orders', function () {
    return view('orders');
    // view will be "main orders" screen
});

Route::get('/orders/builder', function () {
    return view('orders-build');
    // view will be "new order" screen
});

Route::get('/products', function () {
    return view('products');
    // view will be "products" (combined library and add-new)***
});

// Route for export PDF?
Route::get('/orders/export', function () {
    return view('orders-export');
    // not sure if exported pdf needs a route and/or view
});

// Route to add blanks used for products (will pull from for drop-down menus in Products Add form)
Route::get('/products/blanks', function () {
    return view('blanks');
    // view will be "add to blanks library"
});