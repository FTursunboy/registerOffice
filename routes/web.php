<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');

});
Route::get('/user/register/brak', [App\Http\Controllers\User\RegistrationDataController::class, 'index'])->name('user.registration.brak');
Route::get('/user/register/brak/store', [App\Http\Controllers\User\RegistrationDataController::class, 'store'])->name('user.registration.brak.store');


Route::group(['middleware' => ['role:user', 'auth']], function () {

    Route::get('/dashboard', function () {
        return view('user.index');
    })->name('dashboard');


});

Route::group(['middleware' => ['role:admin', 'auth']], function () {
    Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::get('/regions', [App\Http\Controllers\Admin\RegionController::class, 'index'])->name('region.index');
    Route::post('regions/store', [App\Http\Controllers\Admin\RegionController::class, 'store'])->name('region.store');
    Route::patch('/regions/update/{id}', [App\Http\Controllers\Admin\RegionController::class, 'update'])->name('region.update');
    Route::get('/regions/delete/{id}', [App\Http\Controllers\Admin\RegionController::class, 'delete'])->name('region.delete');
    Route::get('/otdels', [App\Http\Controllers\Admin\OtdelController::class, 'index'])->name('otdel.index');
    Route::post('/otdels/store', [App\Http\Controllers\Admin\OtdelController::class, 'store'])->name('otdels.store');
    Route::patch('/otdels/update/{id}', [App\Http\Controllers\Admin\OtdelController::class, 'update'])->name('otdels.update');
    Route::get('/otdels/delete/{id}', [App\Http\Controllers\Admin\OtdelController::class, 'delete'])->name('otdels.delete');
    Route::get('/otdels/details', [App\Http\Controllers\Admin\OtdelController::class, 'details'])->name('region.details');

    Route::get('/service', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('service.index');
    Route::post('/services/store', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('service.store');
    Route::patch('/services/update', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('service.update');
    Route::get('/management', [App\Http\Controllers\Admin\ManagementController::class, 'index'])->name('management.index');
    Route::post('/management/store', [App\Http\Controllers\Admin\ManagementController::class, 'store'])->name('management.store');
    Route::patch('/management/update', [App\Http\Controllers\Admin\ManagementController::class, 'update'])->name('management.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

});

require __DIR__.'/auth.php';
