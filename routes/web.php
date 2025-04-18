<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login',[AdminAuthController::class,'login'])->name('admin.login');
Route::get('admin/dashboard',[AdminDashboardController::class,'dashboard'])->name('admin.dashboard');
Route::get('admin/profile',[AdminDashboardController::class,'profile'])->name('admin.profile');
Route::get('forgot-password',[AdminAuthController::class,'forgetPassword'])->name('admin.forgot');
Route::get('reset-password',[AdminAuthController::class,'resetPassword'])->name('admin.reset');
