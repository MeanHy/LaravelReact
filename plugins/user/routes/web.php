<?php
use Huyle\User\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('user', UserController::class);