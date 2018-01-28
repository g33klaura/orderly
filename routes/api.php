<?php

use Illuminate\Http\Request;
use App\ProductBlank;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Trying to set logout route for React Nav component
// Route::post('/logout', function(){
//     return view('home');
// });

// =====================================================
// Product Library of all products in db

Route::get('/products', 'ProductsController@index');



// =====================================================
// PRACTICE ~but still using

// Product Blanks (should've renamed endpoint to /product/blanks)
Route::resource('/blanks', 'ProductBlankController' , ['parameters' => ['blanks' => 'id']]);

// // Index
// Route::get('/blanks', 'ProductBlankController@index');

// // Create
// Route::get('/blanks/create', 'ProductBlankController@create');

// // Store
// Route::post('/blanks', 'ProductBlankController@store');

// // Show
// // Route::get('/blanks/{blank}', function ($id) {
// //     return response(ProductBlank::find($id), 200);
// // });
// Route::get('/blanks/{id}', 'ProductBlankController@show');

// // Edit
// // Like Create, will this just be used to render a view??

// // Update
// Route::put('/blanks/{id}','ProductBlankController@update');

// // Delete
// Route::delete('/blanks/{id}', 'ProductBlankController@delete');
// =====================================================
