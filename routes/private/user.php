<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\UserController;

    Route::group(['prefix' => 'private', 'middleware' => 'auth'], function () {
        Route::group(['prefix' => '/user'], function () {
            Route::get('/list', [UserController::class, 'privateUserListPage']);
        });
    });