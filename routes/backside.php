<?php

use App\Http\Controllers\Backside\Admin\DashboardAdminController;
use App\Http\Controllers\Backside\Admin\MemberInformation\ManageMemberController;
use App\Http\Controllers\Backside\Admin\MemberInformation\MemberMutationController;
use App\Http\Controllers\Backside\Admin\MemberInformation\MemberProductLinkController;
use App\Http\Controllers\Backside\Admin\MemberInformation\MemberWithdrawalRequestController;
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
        Route::get('/withdrawal-request', [MemberWithdrawalRequestController::class, 'memberWithdrawalRequestView'])->name('withdrawal-request-view');
        Route::get('/{member_id}/edit', [ManageMemberController::class, 'editMemberView'])->name('edit-view');
        Route::get('/{member_id}/product-link', [MemberProductLinkController::class, 'memberProductLinkView'])->name('product-link-view');
        Route::get('/{member_id}/mutation', [MemberMutationController::class, 'memberMutationView'])->name('mutation-view');
    });
});
