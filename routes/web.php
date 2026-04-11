<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\PricingPlanController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::post('/lead', [LandingController::class, 'storeLead'])->name('lead.store');
Route::post('/chatbot', [ChatbotController::class, 'ask'])->name('chatbot.ask');
Route::get('/downloads/{download}', [LandingController::class, 'downloadFile'])->name('download.file');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Abstracting simple CRUDs just with resourceful routes
    Route::resource('leads', LeadController::class);
    Route::resource('features', FeatureController::class);
    Route::resource('pricing', PricingPlanController::class);
    Route::resource('faqs', FaqController::class);
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'store'])->name('settings.store');
    Route::resource('downloads', DownloadController::class);
    Route::resource('testimonials', TestimonialController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
