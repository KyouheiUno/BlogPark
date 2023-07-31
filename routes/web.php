<?php

use Illuminate\Support\Facades\Route;

Route::get('/main/index', [App\Http\Controllers\MainController::class, 'index']);
