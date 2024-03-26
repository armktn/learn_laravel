<?php

use App\Http\Controllers\customerController;
use Illuminate\Support\Facades\Route;

Route::resource("/customer", customerController::class);
