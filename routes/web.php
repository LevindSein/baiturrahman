<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneralSettingsController;

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

Route::get('dashboard', function(){
    return view('dashboard.index');
});

Route::get('pengaturan_umum', [GeneralSettingsController::class, 'index']);

Route::get('qr_code', function(){
    return view('qr_code.index');
});
