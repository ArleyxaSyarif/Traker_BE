<?php

use App\Http\Controllers\api\IbadahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('ibadah', IbadahController::class);


// Route::get('/hello', function () {
//     return ['message' => 'halo gays'];
// });
