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
// PRACTICE
// Route::get('/blanks', function () {
//     return response(ProductBlank::all(),200);
// });
Route::get('/blanks', 'ProductBlankController@index');
// Either type of route call works (explicit or with Controller)
// ^^breaks if I switch to using controller here...............

Route::get('/blanks/{blank}', function ($id) {
    return response(ProductBlank::find($id), 200);
});
// Route::get('/blanks/{id}', 'ProductBlankController@show');
// =====================================================
