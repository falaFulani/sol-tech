<?php

use Illuminate\Http\Request;

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
// //Routes for Suppliers
// Route::get('supplier', 'SupplierController@index'); 
// Route::get('supplier/{supplier}', 'SupplierController@show');
// Route::post('supplier','SupplierController@store'); 
// Route::put('supplier/{supplier}', 'SupplierController@update'); 
// Route::delete('supplier/{supplier}','SupplierController@destroy'); 
Route::apiResources([
    'supplier' => 'SupplierController',
   'order' => 'OrderController', 
   'product' => 'ProductController'
]);