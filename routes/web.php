<?php

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
Route::get('/', [App\Http\Controllers\PatientController::class, 'index']);
Route::get('patients/create', [App\Http\Controllers\PatientController::class, 'create']);
Route::post('patients/create', [App\Http\Controllers\PatientController::class, 'store']);
Route::get('patients/{id}/show', [App\Http\Controllers\PatientController::class, 'show']);
Route::get('patients/{id}/edit', [App\Http\Controllers\PatientController::class, 'edit']);
Route::put('patients/{id}/edit', [App\Http\Controllers\PatientController::class, 'update']);
Route::get('patients/{id}/delete', [App\Http\Controllers\PatientController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
