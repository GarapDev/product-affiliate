<?php

use App\Http\Controllers\Backside\Admin\DashboardAdminController;
use App\Http\Controllers\Backside\Admin\MemberInformation\ManageMemberController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Route Group Section
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'dashboardAdminView'])->name('dashboard');

    Route::group(['prefix' => 'manage-member', 'as' => 'manage-member.'], function () {
        Route::get('/', [ManageMemberController::class, 'indexMemberView'])->name('index-view');
        Route::get('/{member_id}/edit', [ManageMemberController::class, 'editMemberView'])->name('edit-view');
    });
});
