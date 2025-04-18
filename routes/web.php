<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Front\frontController;
use App\Http\Middleware\Admin;
Route::get('',[frontController::class,'home'])->name('home');
Route::get('admin/login',[AdminAuthController::class,'login'])->name('admin.login');

Route::get('forgot-password',[AdminAuthController::class,'forgetPassword'])->name('admin.forgot');
Route::get('reset-password',[AdminAuthController::class,'resetPassword'])->name('admin.reset');


    Route::get('admin/dashboard',[AdminDashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('admin/profile',[AdminDashboardController::class,'profile'])->name('admin.profile');

