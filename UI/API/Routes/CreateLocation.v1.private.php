<?php

/**
 * @apiGroup           Location
 * @apiName            CreateLocation
 *
 * @api                {POST} /v1/locations Create Location
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

use App\Containers\Vendor\Location\UI\API\Controllers\CreateLocationController;
use Illuminate\Support\Facades\Route;

Route::post('locations', [CreateLocationController::class, 'createLocation'])
    ->middleware(['auth:api']);

