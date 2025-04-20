<?php

use App\Http\Controllers\Web\Landing\HomeLandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeLandingController::class, 'view'])->name(config('route.landing.home'));
