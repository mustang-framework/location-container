<?php

use App\Containers\Vendor\Location\UI\WEB\Controllers\GetAllLocationsController;
use Illuminate\Support\Facades\Route;

Route::get('locations', [GetAllLocationsController::class, 'index'])
    ->middleware(['auth:web']);

