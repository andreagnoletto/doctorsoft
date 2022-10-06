<?php

use App\Http\Controllers\Api\V1\Admin\CityApiController;
use App\Http\Controllers\Api\V1\Admin\CountryApiController;
use App\Http\Controllers\Api\V1\Admin\EventApiController;
use App\Http\Controllers\Api\V1\Admin\MedicalRecordApiController;
use App\Http\Controllers\Api\V1\Admin\PatientApiController;
use App\Http\Controllers\Api\V1\Admin\StateApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Event
    Route::apiResource('events', EventApiController::class);

    // Patient
    Route::apiResource('patients', PatientApiController::class);

    // Country
    Route::apiResource('countries', CountryApiController::class);

    // State
    Route::apiResource('states', StateApiController::class);

    // City
    Route::apiResource('cities', CityApiController::class);

    // Medical Record
    Route::apiResource('medical-records', MedicalRecordApiController::class);
});
