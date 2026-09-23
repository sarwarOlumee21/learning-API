<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\IntegrationController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [ChirpController::class, 'index']);
Route::get('/', [ChirpController::class, 'resident']);
Route::post('/store', [ChirpController::class, 'store'])->name('store');
// Route::get('/integrated-data', [IntegrationController::class, 'fetchFromSystemOne']);
// Route::get('/test-route', function () {
//     dd('route works');
// });