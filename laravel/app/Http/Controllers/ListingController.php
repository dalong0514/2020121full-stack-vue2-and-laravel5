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

    public function get_listing_web(ListingModel $listing)
    {
        $model = $listing->toArray();
        $model = $this->add_image_urls($model, $listing->id);
        return view('app', ['model' => $model]);
    }

    private function add_image_urls($model, $id)
    {
        for($i = 1; $i <=4; $i++) {
            $model['image_' . $i] = asset('images/' . $id . '/Image_' . $i . '.jpg');
        }
        return $model;
    }

    // 主页
    public function get_home_web()
    {
        return view('app', ['model' => []]);
    }
}
