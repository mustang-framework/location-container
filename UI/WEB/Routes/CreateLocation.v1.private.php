<?php

use App\Containers\Vendor\Location\UI\WEB\Controllers\CreateLocationController;
use Illuminate\Support\Facades\Route;

Route::get('locations/create', [CreateLocationController::class, 'create'])
    ->middleware(['auth:web']);

