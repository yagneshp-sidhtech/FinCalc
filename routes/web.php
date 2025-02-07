<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CalculatorController;

Route::get('/', [AdminAuthController::class, 'login'])->name('login');

Route::get('/index', [CalculatorController::class, 'index'])->name('index');

Route::get('/fd-calculator', [CalculatorController::class, 'fdCalculator'])->name('fd.calculator');

Route::get('/sip-calculator', [CalculatorController::class, 'sipCalculator'])->name('sip.calculator');

Route::get('/rd-calculator', [CalculatorController::class, 'rdCalculator'])->name('rd.calculator');

Route::get('/ppf-calculator', [CalculatorController::class, 'ppfCalculator'])->name('ppf.calculator');

Route::get('/gst-calculator', [CalculatorController::class, 'gstCalculator'])->name('gst.calculator');

Route::get('/compare-loan', [CalculatorController::class, 'compareLoan'])->name('compare.loan');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('/dologin', [AdminAuthController::class, 'dologin'])->name('dologin');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

        // ----------------------------- Change Password ----------------------------- //

        Route::get('/change/password', [AdminAuthController::class, 'changePassword'])->name('change.password');
        Route::post('/update/password', [AdminAuthController::class, 'updatePassword'])->name('update.password');

        // ----------------------------- Blog ----------------------------- //

        Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/blog/ajax_listing', [BlogController::class, 'ajax_listing'])->name('blog.ajax_listing');
        Route::get('/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
        Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/blog/delete', [BlogController::class, 'destroy'])->name('blog.delete');
    });
});
