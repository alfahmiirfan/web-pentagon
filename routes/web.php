<?php

use App\Http\Controllers\Web\Admin\Dashboard\HomeDashboardAdminController;
use App\Http\Controllers\Web\Admin\Activity\HomeActivityAdminController;
use App\Http\Controllers\Web\Landing\ProgramLandingController;
use App\Http\Controllers\Web\Landing\HomeLandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeLandingController::class, 'view'])->name(config('route.landing.home'));
Route::get('program', [ProgramLandingController::class, 'view'])->name(config('route.landing.program'));

// ADMIN
Route::prefix('admin')->group(function (): void {

    // Dashboard
    Route::prefix('beranda')->group(function (): void {
        Route::get('/', [HomeDashboardAdminController::class, 'view'])->name(config('route.admin.dashboard.home'));
    });

    // Activity
    Route::prefix('kegiatan')->group(function (): void {
        Route::get('/', [HomeActivityAdminController::class, 'view'])->name(config('route.admin.activity.home'));
    });

});
