<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // Open to the world
    Route::get('/', function () {
        return response()->json(['message' => 'Version v1!'],200);
    });
    // Redirect if authenticated
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest');

    Route::post('register', [RegisteredUserController::class, 'store'])
        ->middleware('guest');

    //todo: work out how to handle the email verification
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->middleware('guest');
    //todo: work out how to handle the email verification
    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->middleware('guest');

    // Auth routes can be added here
    Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
        return $request->user();
    });
});
