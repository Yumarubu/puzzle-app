<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

Route::get('users/{user_id}',
    [UserController::class,'show'])
->name('users.show');
