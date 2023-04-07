<?php

namespace App\Containers\Vendor\Location\Data\Seeders;

use App\Containers\Vendor\Location\Models\City;
use App\Containers\Vendor\Location\Models\Province;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use Illuminate\Support\Str;

class CitySeeder_3 extends ParentSeeder
{
    public function run()
    {
        foreach (glob(__DIR__ . "/../Seeds/Cities/*.json") as $file) {
            $cities = json_decode(file_get_contents($file), true);

            foreach ($cities as $city) {
                $province = Province::where('code', $city['province'])->first();
                $r = new City();
                $r->province_id = $province->id;
                $r->name = $city['name'];
                $r->local_name = $city['local_name'] ?? $city['name'];
                $r->slug = Str::slug($city['name']);

                $r->save();
            }
        }
    }
}
