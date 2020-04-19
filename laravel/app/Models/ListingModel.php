<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// load all listings
// $listing = \App\Listing::all();
class ListingModel extends Model
{
    protected $table = 'listings';
    protected $casts = [
        'amenity_wifi' => 'boolean',
        'amenity_pets_allowed' => 'boolean',
        'amenity_tv' => 'boolean',
        'amenity_kitchen' => 'boolean',
        'amenity_breakfast' => 'boolean',
        'amenity_laptop' => 'boolean'
    ];

    public static function getListing() {
        return self::query()
            ->get();
    }
}
