<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListingModel;

class ListingController extends Controller
{
    public function get_listing_api(ListingModel $listing)
    {
        $model = $listing->toArray();
        for ($i = 1; $i <=4; $i++) {
            $model['image_' . $i] = asset(
                'images/' . $listing->id . '/Image_' . $i . '.jpg');
        }
        return response()->json($model);
    }

    // test for require data by a function in model file
    public function get_listing()
    {
        $listing = ListingModel::getListing();
        return $listing->toJson();
    }
}
