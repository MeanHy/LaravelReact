<?php
use Huyle\Renvenues\Controllers\RenvenuesController;
use Illuminate\Support\Facades\Route;

Route::resource('renvenues', RenvenuesController::class);