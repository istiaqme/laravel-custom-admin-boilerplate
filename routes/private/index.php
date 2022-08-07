<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/user.php';

    /* root route */
    Route::get('/private', function () {
        return "<h1>Hello Private</h1>";
    });