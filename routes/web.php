<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SuperAdminController::class, 'index'])->name('superadmin.presiden.index');
Route::get('/create', [SuperAdminController::class, 'create'])->name('superadmin.presiden.create');
Route::get('/store', [SuperAdminController::class, 'store'])->name('superadmin.presiden.store');

// Route::prefix('/')->group(function () {
//     Route::get('/presiden', [SuperAdminController::class, 'index'])->name('superadmin.presiden.index');
//     Route::get('/presiden/create', [SuperAdminController::class, 'create'])->name('superadmin.presiden.create');
//     // ... rute lainnya ...
// });