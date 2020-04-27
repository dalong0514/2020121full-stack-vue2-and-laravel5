<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListingModel;

class ListingController extends Controller
{
    // refactoring methods
    public function get_listing($listing)
    {
        $model = $listing->toArray();
        for($i = 1; $i <=4; $i++) {
            $model['image_' . $i] = asset('images/' . $listing->id . '/Image_' . $i . '.jpg');
        }
        return collect(['listing' => $model]);
    }

    public function get_listing_api(ListingModel $listing)
    {
        $data = $this->get_listing($listing);
        return response()->json($data);
    }

    public function get_listing_web(ListingModel $listing)
    {
        $data = $this->get_listing($listing);
        return view('app', ['model' => $data]);
    }

    // home page
    public function get_home_web()
    {
        $collection = ListingModel::all([
            'id', 'address', 'title', 'price_per_night'
        ]);
        $data = collect(['listing' => $collection->toArray()]);
        return view('app', ['data' => $data]);
    }
}
