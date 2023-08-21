<?php

use App\Http\Controllers\Affiliate\ShowProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Affiliate Link Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'a', 'as' => 'a.'], function () {
    Route::prefix('{affiliate_code}')->group(function () {
        Route::get('/', [ShowProductController::class, 'showRelatedProduct'])->name('show-related-product');
    });
});
