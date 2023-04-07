<?php

namespace App\Containers\Vendor\Location\Data\Seeders;

use App\Containers\Vendor\Location\Models\Country;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use Illuminate\Support\Str;

class CountrySeeder_1 extends ParentSeeder
{
    public function run()
    {
        $countries = json_decode(file_get_contents(__DIR__ . '/../Seeds/countries.json'), true);
        foreach ($countries as $country) {
            $country['slug'] = Str::of($country['Name']);
            Country::create(array_change_key_case($country));
        }
    }
}
