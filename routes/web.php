<?php

use App\Http\Controllers\Web\Admin\StudentActivity\DeleteStudentActivityAdminController;
use App\Http\Controllers\Web\Admin\StudentActivity\EditStudentActivityAdminController;
use App\Http\Controllers\Web\Admin\StudentActivity\HomeStudentActivityAdminController;
use App\Http\Controllers\Web\Admin\StudentActivity\AddStudentActivityAdminController;
use App\Http\Controllers\Web\Admin\Achievement\DeleteAchievementAdminController;
use App\Http\Controllers\Web\Admin\Information\DeleteInformationAdminController;
use App\Http\Controllers\Web\Admin\Information\NumberInformationAdminController;
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
use App\Http\Controllers\Web\Admin\Alumni\AddAlumniAdminController;
use App\Http\Controllers\Web\Landing\AchievementLandingController;
use App\Http\Controllers\Web\Landing\InformationLandingController;
use App\Http\Controllers\Web\Admin\PTK\DeletePTKAdminController;
use App\Http\Controllers\Web\Admin\PTK\EditPTKAdminController;
use App\Http\Controllers\Web\Admin\PTK\HomePTKAdminController;
use App\Http\Controllers\Web\Landing\GalleryLandingController;
use App\Http\Controllers\Web\Landing\ProfileLandingController;
use App\Http\Controllers\Web\Landing\ProgramLandingController;
use App\Http\Controllers\Web\Authentication\LogoutController;
use App\Http\Controllers\Web\Admin\PTK\AddPTKAdminController;
use App\Http\Controllers\Web\Landing\AlumniLandingController;
use App\Http\Controllers\Web\Authentication\LoginController;
use App\Http\Controllers\Web\Landing\HomeLandingController;
use App\Http\Controllers\Web\Landing\PTKLandingController;
use Illuminate\Support\Facades\Route;

// LANDING
Route::get('/', [HomeLandingController::class, 'view'])->name(config('route.landing.home'));
Route::get('profil', [ProfileLandingController::class, 'view'])->name(config('route.landing.about-profile'));
Route::get('ptk', [PTKLandingController::class, 'view'])->name(config('route.landing.about-ptk-home'));
Route::get('ptk/{ptk}/lihat', [PTKLandingController::class, 'detail'])->name(config('route.landing.about-ptk-detail'));
Route::get('program', [ProgramLandingController::class, 'view'])->name(config('route.landing.program'));
Route::get('prestasi', [AchievementLandingController::class, 'view'])->name(config('route.landing.achievement-home'));
Route::get('prestasi/{achievement}/lihat', [AchievementLandingController::class, 'detail'])->name(config('route.landing.achievement-detail'));
Route::get('galeri', [GalleryLandingController::class, 'view'])->name(config('route.landing.gallery'));
Route::get('alumni', [AlumniLandingController::class, 'view'])->name(config('route.landing.alumni-home'));
Route::get('alumni/{alumni}/lihat', [AlumniLandingController::class, 'detail'])->name(config('route.landing.alumni-detail'));
Route::get('informasi', [InformationLandingController::class, 'view'])->name(config('route.landing.information-home'));
Route::get('informasi/{information}/lihat', [InformationLandingController::class, 'detail'])->name(config('route.landing.information-detail'));

// AUTHENTICATION
Route::get('masuk', [LoginController::class, 'view'])->name(config('route.auth.login'));
Route::post('masuk', [LoginController::class, 'action'])->name(config('route.auth.login-action'));
Route::any('keluar', [LogoutController::class, 'action'])->name(config('route.auth.logout'));

// ADMIN
Route::prefix('admin')->middleware('auth')->group(function (): void {

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

    // Student Activity
    Route::prefix('kesiswaan')->group(function (): void {
        Route::get('/', [HomeStudentActivityAdminController::class, 'view'])->name(config('route.admin.student-activity.home'));
        Route::get('/tambah', [AddStudentActivityAdminController::class, 'view'])->name(config('route.admin.student-activity.add'));
        Route::post('/tambah', [AddStudentActivityAdminController::class, 'action'])->name(config('route.admin.student-activity.add-action'));
        Route::get('/{studentActivity}/ubah', [EditStudentActivityAdminController::class, 'view'])->name(config('route.admin.student-activity.edit'));
        Route::put('/{studentActivity}/ubah', [EditStudentActivityAdminController::class, 'action'])->name(config('route.admin.student-activity.edit-action'));
        Route::any('/{studentActivity}/hapus', [DeleteStudentActivityAdminController::class, 'action'])->name(config('route.admin.student-activity.delete-action'));
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
        Route::any('/{information}/nomor', [NumberInformationAdminController::class, 'toggle'])->name(config('route.admin.information.number.toggle'));
        Route::any('/{information}/{number}/nomor', [NumberInformationAdminController::class, 'change'])->name(config('route.admin.information.number.change'));
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
