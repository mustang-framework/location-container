<?php

namespace App\Containers\Vendor\Location\Data\Seeders;

use App\Containers\Vendor\Location\Models\Country;
use App\Containers\Vendor\Location\Models\Province;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use Illuminate\Support\Str;

class ProvinceSeeder_2 extends ParentSeeder
{
    public function run()
    {
        foreach (glob(__DIR__ . "/../Seeds/Provinces/*.json") as $file) {
            $country = Country::where('slug', basename($file, '.json'))->first();
            $provinces = json_decode(file_get_contents($file), true);

            foreach ($provinces as $province) {
                $r = new Province();
                $r->country_id = $country->id;
                $r->name = $province['name'];
                $r->local_name = $province['local_name'];
                $r->code = $province['ISO'];
                $r->area_code = $province['area_code'];
                $r->slug = Str::slug($province['name']);

                $r->save();
            }
        }
    }
}
