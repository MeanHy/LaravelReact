<?php
use Huyle\Roles\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::resource('roles', RoleController::class);