<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListingModel;

class ListingController extends Controller
{
    public function get_listing_api(ListingModel $listing)
    {
        return $listing->toJson();
    }

    // test for require data by a function in model file
    public function get_listing()
    {
        $listing = ListingModel::getListing();
        return $listing->toJson();
    }
}
