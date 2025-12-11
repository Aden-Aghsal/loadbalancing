<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController; // <--- Jangan lupa import ini

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

// --- 1. GROUP GUEST: Hanya bisa diakses kalau BELUM login ---
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.action');
});

// --- 2. GROUP AUTH: Hanya bisa diakses kalau SUDAH login ---
Route::middleware('auth')->group(function () {
    
    // Logout (Harus POST demi keamanan)
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Root langsung redirect ke dashboard
    Route::get('/', function () {
        return redirect('/mahasiswa');
    });

    // CRUD Mahasiswa sekarang aman (Protected)
    Route::resource('mahasiswa', MahasiswaController::class);
});

// --- 3. Route Testing (Bebas akses untuk debug) ---
Route::get('/test-env', function () {
    return [
        'env_DB_HOST' => env('DB_HOST'),
        'config_DB_HOST' => config('database.connections.mysql.host'),
        'app_env' => env('APP_ENV'),
    ];
});