<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/listing/{listing}', function(ListingModel $listing) {
//     return $listing->toJson();
// });
Route::get('/listing/{listing}', 'ListingController@get_listing_api');
Route::get('/', 'ListingController@get_home_api');
Route::get('/saved', 'ListingController@get_home_api');
Route::get('/user/toggle_saved', 'UserController@toggle_saved')->middleware('auth:api');