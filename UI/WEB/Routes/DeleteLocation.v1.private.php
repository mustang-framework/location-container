<?php

use App\Containers\Vendor\Location\UI\WEB\Controllers\DeleteLocationController;
use Illuminate\Support\Facades\Route;

Route::delete('locations/{id}', [DeleteLocationController::class, 'destroy'])
    ->middleware(['auth:web']);

