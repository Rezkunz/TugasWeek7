<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\BiodataController;

Route::get('/users', [UsersController::class, 'index']);

Route::get('/biodatas', [BiodataController::class, 'index']);