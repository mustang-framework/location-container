<?php

use App\Containers\Vendor\Location\UI\WEB\Controllers\UpdateLocationController;
use Illuminate\Support\Facades\Route;

Route::get('locations/{id}/edit', [UpdateLocationController::class, 'edit'])
    ->middleware(['auth:web']);

