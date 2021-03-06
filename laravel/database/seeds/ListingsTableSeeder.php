<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // load the file
        $path = base_path() . '/database/data.json';
        $file = File::get($path);
        $data = json_decode($file, true);

        // insert into the database
        DB::table('listings')->insert($data);
    }
}
