<?php

use App\Containers\Vendor\Location\UI\WEB\Controllers\CreateLocationController;
use Illuminate\Support\Facades\Route;

Route::post('locations/store', [CreateLocationController::class, 'store'])
    ->middleware(['auth:web']);

