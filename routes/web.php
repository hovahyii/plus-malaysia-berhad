<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\FireExtinguishersController;
use App\Http\Controllers\BranchesController;


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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');;

Route::middleware(['auth:sanctum', 'verified'])->resource('/fire-extinguishers', FireExtinguishersController::class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/fire-extinguishers', function () {
//     return view('fire-extinguishers');
// })->name('fire-extinguishers');

Route::middleware(['auth:sanctum', 'verified'])->resource('/branches', BranchesController::class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/branches', function () {
//     return view('branches');
// })->name('branches');

Route::middleware(['auth:sanctum', 'verified'])->resource('/staffs', StaffsController::class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/staffs', function () {
//     return view('staffs');
// })->name('staffs');

