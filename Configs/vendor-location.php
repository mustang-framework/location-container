<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Vendor Section Location Container
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    'parent_entity' => env('LOCATION_ENTITY', 'user'),
    'parent_model'  => env('LOCATION_MODEL', 'App\Containers\AppSection\User\Models\User'),
    'default_country' => env('LOCATION_DEF_COUNTRY', 'iran'),
];
