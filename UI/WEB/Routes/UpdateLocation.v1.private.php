<?php

use App\Containers\Vendor\Location\UI\WEB\Controllers\UpdateLocationController;
use Illuminate\Support\Facades\Route;

Route::patch('locations/{id}', [UpdateLocationController::class, 'update'])
    ->middleware(['auth:web']);

