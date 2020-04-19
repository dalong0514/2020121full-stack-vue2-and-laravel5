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
use Illuminate\Support\Facades\Route;
use App\Models\ListingModel;

// Route::get('/listing/{listing}', function(ListingModel $listing) {
//     $model = $listing->toArray();
//     return view('app', [ 'model' => $model ]);
// });

Route::get('/listing/{listing}', 'ListingController@get_listing_web');