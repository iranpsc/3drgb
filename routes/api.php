<?php

use App\Http\Controllers\Api\V1\BuildPackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function() {
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/build-package', [BuildPackageController::class, 'getBuildPackage']);
    Route::get('/build-package/{product}', [BuildPackageController::class, 'getSingleModel']);
});
