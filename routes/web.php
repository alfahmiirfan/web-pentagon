<?php

use App\Http\Controllers\Web\Admin\Achievement\DeleteAchievementAdminController;
use App\Http\Controllers\Web\Admin\Information\DeleteInformationAdminController;
use App\Http\Controllers\Web\Admin\Achievement\EditAchievementAdminController;
use App\Http\Controllers\Web\Admin\Achievement\HomeAchievementAdminController;
use App\Http\Controllers\Web\Admin\Information\EditInformationAdminController;
use App\Http\Controllers\Web\Admin\Information\HomeInformationAdminController;
use App\Http\Controllers\Web\Admin\Achievement\AddAchievementAdminController;
use App\Http\Controllers\Web\Admin\Information\AddInformationAdminController;
use App\Http\Controllers\Web\Admin\Dashboard\HomeDashboardAdminController;
use App\Http\Controllers\Web\Admin\Activity\DeleteActivityAdminController;
use App\Http\Controllers\Web\Admin\Facility\DeleteFacilityAdminController;
use App\Http\Controllers\Web\Admin\Activity\EditActivityAdminController;
use App\Http\Controllers\Web\Admin\Activity\HomeActivityAdminController;
use App\Http\Controllers\Web\Admin\Facility\EditFacilityAdminController;
use App\Http\Controllers\Web\Admin\Facility\HomeFacilityAdminController;
use App\Http\Controllers\Web\Admin\Activity\AddActivityAdminController;
use App\Http\Controllers\Web\Admin\Facility\AddFacilityAdminController;
use App\Http\Controllers\Web\Admin\Alumni\DeleteAlumniAdminController;
use App\Http\Controllers\Web\Admin\Alumni\EditAlumniAdminController;
use App\Http\Controllers\Web\Admin\Alumni\HomeAlumniAdminController;
use App\Http\Controllers\Web\Admin\Event\DeleteEventAdminController;
use App\Http\Controllers\Web\Admin\Alumni\AddAlumniAdminController;
use App\Http\Controllers\Web\Admin\Event\EditEventAdminController;
use App\Http\Controllers\Web\Admin\Event\HomeEventAdminController;
use App\Http\Controllers\Web\Admin\Event\AddEventAdminController;
use App\Http\Controllers\Web\Admin\PTK\DeletePTKAdminController;
use App\Http\Controllers\Web\Admin\PTK\EditPTKAdminController;
use App\Http\Controllers\Web\Admin\PTK\HomePTKAdminController;
use App\Http\Controllers\Web\Landing\ProfileLandingController;
use App\Http\Controllers\Web\Landing\ProgramLandingController;
use App\Http\Controllers\Web\Admin\PTK\AddPTKAdminController;
use App\Http\Controllers\Web\Landing\HomeLandingController;
use App\Http\Controllers\Web\Landing\PTKLandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeLandingController::class, 'view'])->name(config('route.landing.home'));
Route::get('profil', [ProfileLandingController::class, 'view'])->name(config('route.landing.about-profile'));
Route::get('ptk', [PTKLandingController::class, 'view'])->name(config('route.landing.about-ptk'));
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
        Route::post('/tambah', [AddActivityAdminController::class, 'action'])->name(config('route.admin.activity.add-action'));
        Route::get('/{activity}/ubah', [EditActivityAdminController::class, 'view'])->name(config('route.admin.activity.edit'));
        Route::put('/{activity}/ubah', [EditActivityAdminController::class, 'action'])->name(config('route.admin.activity.edit-action'));
        Route::any('/{activity}/hapus', [DeleteActivityAdminController::class, 'action'])->name(config('route.admin.activity.delete-action'));
    });

    // Facility
    Route::prefix('fasilitas')->group(function (): void {
        Route::get('/', [HomeFacilityAdminController::class, 'view'])->name(config('route.admin.facility.home'));
        Route::get('/tambah', [AddFacilityAdminController::class, 'view'])->name(config('route.admin.facility.add'));
        Route::post('/tambah', [AddFacilityAdminController::class, 'action'])->name(config('route.admin.facility.add-action'));
        Route::get('/{facility}/ubah', [EditFacilityAdminController::class, 'view'])->name(config('route.admin.facility.edit'));
        Route::put('/{facility}/ubah', [EditFacilityAdminController::class, 'action'])->name(config('route.admin.facility.edit-action'));
        Route::any('/{facility}/hapus', [DeleteFacilityAdminController::class, 'action'])->name(config('route.admin.facility.delete-action'));
    });

    // Information
    Route::prefix('informasi')->group(function (): void {
        Route::get('/', [HomeInformationAdminController::class, 'view'])->name(config('route.admin.information.home'));
        Route::get('/tambah', [AddInformationAdminController::class, 'view'])->name(config('route.admin.information.add'));
        Route::post('/tambah', [AddInformationAdminController::class, 'action'])->name(config('route.admin.information.add-action'));
        Route::get('/{information}/ubah', [EditInformationAdminController::class, 'view'])->name(config('route.admin.information.edit'));
        Route::put('/{information}/ubah', [EditInformationAdminController::class, 'action'])->name(config('route.admin.information.edit-action'));
        Route::any('/{information}/hapus', [DeleteInformationAdminController::class, 'action'])->name(config('route.admin.information.delete-action'));
    });

    // Event
    Route::prefix('agenda')->group(function (): void {
        Route::get('/', [HomeEventAdminController::class, 'view'])->name(config('route.admin.event.home'));
        Route::get('/tambah', [AddEventAdminController::class, 'view'])->name(config('route.admin.event.add'));
        Route::post('/tambah', [AddEventAdminController::class, 'action'])->name(config('route.admin.event.add-action'));
        Route::get('/{event}/ubah', [EditEventAdminController::class, 'view'])->name(config('route.admin.event.edit'));
        Route::put('/{event}/ubah', [EditEventAdminController::class, 'action'])->name(config('route.admin.event.edit-action'));
        Route::any('/{event}/hapus', [DeleteEventAdminController::class, 'action'])->name(config('route.admin.event.delete-action'));
    });

    // PTK
    Route::prefix('ptk')->group(function (): void {
        Route::get('/', [HomePTKAdminController::class, 'view'])->name(config('route.admin.ptk.home'));
        Route::get('/tambah', [AddPTKAdminController::class, 'view'])->name(config('route.admin.ptk.add'));
        Route::post('/tambah', [AddPTKAdminController::class, 'action'])->name(config('route.admin.ptk.add-action'));
        Route::get('/{ptk}/ubah', [EditPTKAdminController::class, 'view'])->name(config('route.admin.ptk.edit'));
        Route::put('/{ptk}/ubah', [EditPTKAdminController::class, 'action'])->name(config('route.admin.ptk.edit-action'));
        Route::any('/{ptk}/hapus', [DeletePTKAdminController::class, 'action'])->name(config('route.admin.ptk.delete-action'));
    });

    // Achievement
    Route::prefix('prestasi')->group(function (): void {
        Route::get('/', [HomeAchievementAdminController::class, 'view'])->name(config('route.admin.achievement.home'));
        Route::get('/tambah', [AddAchievementAdminController::class, 'view'])->name(config('route.admin.achievement.add'));
        Route::post('/tambah', [AddAchievementAdminController::class, 'action'])->name(config('route.admin.achievement.add-action'));
        Route::get('/{achievement}/ubah', [EditAchievementAdminController::class, 'view'])->name(config('route.admin.achievement.edit'));
        Route::put('/{achievement}/ubah', [EditAchievementAdminController::class, 'action'])->name(config('route.admin.achievement.edit-action'));
        Route::any('/{achievement}/hapus', [DeleteAchievementAdminController::class, 'action'])->name(config('route.admin.achievement.delete-action'));
    });

    // Alumni
    Route::prefix('alumni')->group(function (): void {
        Route::get('/', [HomeAlumniAdminController::class, 'view'])->name(config('route.admin.alumni.home'));
        Route::get('/tambah', [AddAlumniAdminController::class, 'view'])->name(config('route.admin.alumni.add'));
        Route::post('/tambah', [AddAlumniAdminController::class, 'action'])->name(config('route.admin.alumni.add-action'));
        Route::get('/{alumni}/ubah', [EditAlumniAdminController::class, 'view'])->name(config('route.admin.alumni.edit'));
        Route::put('/{alumni}/ubah', [EditAlumniAdminController::class, 'action'])->name(config('route.admin.alumni.edit-action'));
        Route::any('/{alumni}/hapus', [DeleteAlumniAdminController::class, 'action'])->name(config('route.admin.alumni.delete-action'));
    });

});
