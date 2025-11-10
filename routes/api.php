<?php

use App\Http\Controllers\RestController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/create', function (Request $request) {
    $user = User::all()->first();

    $token = $user->createToken('Demo');

    return $token;
});

Route::get('/temp', function (Request $request) {

    $result = [
        'success' => true,
        'temp' => 47
    ];
    // return response()->json($result);
    return $result;
})->middleware('auth:sanctum');

Route::get('/items', [RestController::class, 'index']);

