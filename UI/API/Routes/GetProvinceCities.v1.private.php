<?php

/**
 * @apiGroup           Location
 * @apiName            
 *
 * @api                {GET} /v1/provinces/:province_id/cities 
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\Vendor\Location\UI\API\Controllers\GetProvinceCitiesController;
use Illuminate\Support\Facades\Route;

Route::get('provinces/{province_id}/cities', [GetProvinceCitiesController::class, 'provinceCities'])
    ->middleware(['auth:api']);

