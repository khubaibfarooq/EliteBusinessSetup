<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\AdminServicesController;
use App\Http\Controllers\Admin\AdminInquiriesController;
use App\Http\Controllers\Admin\AdminFreeZonesController;
use App\Http\Controllers\Admin\AdminTestimonialsController;
use App\Http\Controllers\Admin\AdminStatsController;
use App\Http\Controllers\Admin\AdminFaqsController;

// Public
Route::get('/', fn() => view('home'))->name('home');

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('services',   AdminServicesController::class);
    Route::resource('inquiries',  AdminInquiriesController::class)->only(['index','show','destroy']);
    Route::resource('free-zones', AdminFreeZonesController::class);
    Route::resource('testimonials', AdminTestimonialsController::class);
    Route::resource('stats', AdminStatsController::class);
    Route::resource('faqs', AdminFaqsController::class);
    Route::get('settings',  [AdminSettingsController::class, 'index'])->name('settings.index');
    Route::post('settings', [AdminSettingsController::class, 'update'])->name('settings.update');
});

// Auth (login/logout only)
Route::get('/admin/login',  [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/admin/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
Route::post('/admin/logout',[App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth');
