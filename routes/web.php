<?php

use App\Http\Controllers\Web\Admin\Achievement\HomeAchievementAdminController;
use App\Http\Controllers\Web\Admin\Information\HomeInformationAdminController;
use App\Http\Controllers\Web\Admin\Achievement\AddAchievementAdminController;
use App\Http\Controllers\Web\Admin\Information\AddInformationAdminController;
use App\Http\Controllers\Web\Admin\Dashboard\HomeDashboardAdminController;
use App\Http\Controllers\Web\Admin\Activity\HomeActivityAdminController;
use App\Http\Controllers\Web\Admin\Facility\HomeFacilityAdminController;
use App\Http\Controllers\Web\Admin\Activity\AddActivityAdminController;
use App\Http\Controllers\Web\Admin\Facility\AddFacilityAdminController;
use App\Http\Controllers\Web\Admin\Alumni\HomeAlumniAdminController;
use App\Http\Controllers\Web\Admin\Event\HomeEventAdminController;
use App\Http\Controllers\Web\Admin\Event\AddEventAdminController;
use App\Http\Controllers\Web\Admin\PTK\HomePTKAdminController;
use App\Http\Controllers\Web\Landing\ProgramLandingController;
use App\Http\Controllers\Web\Admin\PTK\AddPTKAdminController;
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
        Route::get('/tambah', [AddActivityAdminController::class, 'view'])->name(config('route.admin.activity.add'));
    });

    // Facility
    Route::prefix('fasilitas')->group(function (): void {
        Route::get('/', [HomeFacilityAdminController::class, 'view'])->name(config('route.admin.facility.home'));
        Route::get('/tambah', [AddFacilityAdminController::class, 'view'])->name(config('route.admin.facility.add'));
    });

    // Information
    Route::prefix('informasi')->group(function (): void {
        Route::get('/', [HomeInformationAdminController::class, 'view'])->name(config('route.admin.information.home'));
        Route::get('/tambah', [AddInformationAdminController::class, 'view'])->name(config('route.admin.information.add'));
    });

    // Event
    Route::prefix('agenda')->group(function (): void {
        Route::get('/', [HomeEventAdminController::class, 'view'])->name(config('route.admin.event.home'));
        Route::get('/tambah', [AddEventAdminController::class, 'view'])->name(config('route.admin.event.add'));
    });

    // PTK
    Route::prefix('ptk')->group(function (): void {
        Route::get('/', [HomePTKAdminController::class, 'view'])->name(config('route.admin.ptk.home'));
        Route::get('/tambah', [AddPTKAdminController::class, 'view'])->name(config('route.admin.ptk.add'));
    });

    // Achievement
    Route::prefix('prestasi')->group(function (): void {
        Route::get('/', [HomeAchievementAdminController::class, 'view'])->name(config('route.admin.achievement.home'));
        Route::get('/tambah', [AddAchievementAdminController::class, 'view'])->name(config('route.admin.achievement.add'));
    });

    // Alumni
    Route::prefix('alumni')->group(function (): void {
        Route::get('/', [HomeAlumniAdminController::class, 'view'])->name(config('route.admin.alumni.home'));
    });

});
