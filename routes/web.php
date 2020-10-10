<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CardSettingsController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MainPage;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserInfoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [MainPage::class, 'homePage'])->name('dashboard');

Route::resource('cards', CardController::class);

Route::get('/home',[MainPage::class, 'homePage']);

Route::get('/userCards', [UserInfoController::class, 'getCards']);

Route::resource('devices', DeviceController::class);

Route::resource('transactions', TransactionController::class);
Route::post('/transactions/withoutChecks', [TransactionController::class, 'saveToDB']);
Route::post('/checkAudio', [TransactionController::class, 'checkAudio']);

Route::get('card/{id}/settings',[CardSettingsController::class, 'getSettings']);

Route::get('/transaction/{id}/danger',[TransactionController::class,'dangerStatus']);
