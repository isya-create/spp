<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\PasangansController;
use App\Http\Controllers\HeirsController;
use App\Http\Controllers\JawatanController;
use App\Http\Controllers\MainController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/pekerjas', [PekerjaController::class, 'index']);
    // Route::get('/pekerjas/edit', [PekerjaController::class, 'edit']);
    // Route::get('/pasangans', [PasangansController::class, 'index']);
    // Route::get('/pasangans/create', [PasangansController::class, 'create'])->name('pasangans.create');
    // Route::get('/heirs/create', [HeirsController::class, 'create'])->name('heirs.create');
    // Route::get('/jawatans/create', [JawatanController::class, 'create'])->name('jawatans.create'); 
    

    Route::resource('pekerjas', PekerjaController::class);
    Route::resource('cutis', CutiController::class);
    Route::resource('kehadirans', KehadiranController::class);     
    Route::resource('pasangans', PasangansController::class);     
    Route::resource('heirs', HeirsController::class);   
    Route::resource('jawatans', JawatanController::class); 
    Route::get('/main', [MainController::class, 'index'])->name('main');

    
    
    Route::get('/main', function () {
        return view('main');
    });
});

require __DIR__.'/auth.php';
