<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    return redirect('/mahasiswa');
});
Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/test-env', function () {
    return [
        'env_DB_HOST' => env('DB_HOST'),
        'config_DB_HOST' => config('database.connections.mysql.host'),
        'app_env' => env('APP_ENV'),
    ];
});
