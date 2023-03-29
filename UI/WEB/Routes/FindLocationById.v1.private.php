<?php

use App\Containers\Vendor\Location\UI\WEB\Controllers\FindLocationByIdController;
use Illuminate\Support\Facades\Route;

Route::get('locations/{id}', [FindLocationByIdController::class, 'show'])
    ->middleware(['auth:web']);

