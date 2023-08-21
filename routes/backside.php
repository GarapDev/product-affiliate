<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Route Group Section
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'dashboardAdminView'])->name('dashboard');
});
