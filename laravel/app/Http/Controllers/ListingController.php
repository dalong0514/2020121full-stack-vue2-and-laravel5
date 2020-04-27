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

    // adding a path to the model
    private function add_meta_data($collection, $request) {
        return $collection->merge([
            'path' => $request->getPathInfo()
        ]);
    }

    public function get_listing_api(ListingModel $listing)
    {
        $data = $this->get_listing($listing);
        return response()->json($data);
    }

    public function get_listing_web(ListingModel $listing, Request $request)
    {
        $data = $this->get_listing($listing);
        $data = $this->add_meta_data($data, $request);
        return view('app', ['data' => $data]);
    }

    // home page
    public function get_home_web(Request $request)
    {
        $collection = ListingModel::all([
            'id', 'address', 'title', 'price_per_night'
        ]);
        // 增加 thumb 图片的 url
        $collection->transform(function($listing) {
            $listing->thumb = asset(
                'images/' . $listing->id . '/Image_1_thumb.jpg'
            );
            return $listing;
        });
        $data = collect(['listings' => $collection->toArray()]);
        $data = $this->add_meta_data($data, $request);
        return view('app', ['data' => $data]);
    }
}
