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

// =====================================================
// PRACTICE ~but still using

// Index
Route::get('/blanks', 'ProductBlankController@index');

// Create
Route::get('/blanks/create', 'ProductBlankController@create');

// Store
Route::post('/blanks', 'ProductBlankController@store');

// Show
// Route::get('/blanks/{blank}', function ($id) {
//     return response(ProductBlank::find($id), 200);
// });
Route::get('/blanks/{id}', 'ProductBlankController@show');

// Edit
// Like Create, will this just be used to render a view??

// Update
Route::put('/blanks/{id}','ProductBlankController@update');

// Delete
Route::delete('/blanks/{id}', 'ProductBlankController@delete');
// =====================================================
