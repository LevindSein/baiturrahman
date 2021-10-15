<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneralSettingsController;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('logout', [AuthController::class, 'logout']);
Route::resource('login', AuthController::class);


Route::middleware('checkauth')->group(function(){
    Route::middleware('oneauth')->group(function(){
        Route::get('dashboard', function(){
            return view('dashboard.index');
        });
        Route::get('pengaturan_umum', [GeneralSettingsController::class, 'index']);
        Route::prefix('gsetting')->group(function () {
            Route::post('title', [GeneralSettingsController::class, 'title']);
            Route::post('footer', [GeneralSettingsController::class, 'footer']);
            Route::post('favicon', [GeneralSettingsController::class, 'favicon']);
            Route::post('sosial', [GeneralSettingsController::class, 'sosial']);
            Route::post('login', [GeneralSettingsController::class, 'login']);
            Route::post('registrasi', [GeneralSettingsController::class, 'registrasi']);
            Route::post('gambar_login', [GeneralSettingsController::class, 'gambar_login']);
            Route::post('gambar_registrasi', [GeneralSettingsController::class, 'gambar_registrasi']);
            Route::post('logo_dashboard', [GeneralSettingsController::class, 'logo_dashboard']);
            Route::post('logo_text_dashboard', [GeneralSettingsController::class, 'logo_text_dashboard']);
        });
    });

    Route::resource('profil', ProfilController::class);
});

Route::get('qr_code', function(){
    return view('qr_code.index');
});
