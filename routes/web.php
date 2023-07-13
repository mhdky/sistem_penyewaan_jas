<?php

use App\Http\Controllers\SuitController;
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
    return view('home', [
        'title' => 'Ky-Jas | Jual & Sewa Jas Keren, Lengkap, Harga Bersahabat'
    ]);
});

// suit
Route::get('/suit/adult', [SuitController::class, 'index']); // jas dewasa
Route::get('/suit/kids', [SuitController::class, 'kids']); //jas anak
Route::get('/this/suit', [SuitController::class, 'detailSuit']); //detail suit

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
