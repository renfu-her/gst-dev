<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\Frontend\{
    HomeController,
    ServiceController,
    PrivacyController,
};

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
// 驗證碼路由
Route::get('/captcha', [CaptchaController::class, 'generate'])->name('captcha.generate');
Route::post('/captcha/refresh', [CaptchaController::class, 'generate'])->name('captcha.refresh');

Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
    Route::get('/erp', [ServiceController::class, 'erp'])->name('erp');
    Route::get('/project', [ServiceController::class, 'project'])->name('project');
    Route::get('/software', [ServiceController::class, 'software'])->name('software');
    Route::get('/server', [ServiceController::class, 'server'])->name('server');
    Route::get('/outsourcing', [ServiceController::class, 'outsourcing'])->name('outsourcing');
    Route::get('/hardware', [ServiceController::class, 'hardware'])->name('hardware');
});
