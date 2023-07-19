<?php

use App\Http\Controllers\ControllerDashboardPenyewaan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
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

// home
Route::get('/', [HomeController::class, 'index']);

// data for live search home dan lainnya
Route::get('/sdjfqiaaweq112/{searchText}', [SearchController::class, 'search']);

// data for live search cek ketersedian jas
Route::get('/sdjfqiaaweu8ui/{searchTextKetersedianJas}', [SearchController::class, 'searchKetersedianJas'])->middleware('admin');

// suit
Route::get('/suit/adult', [SuitController::class, 'index']); // jas dewasa
Route::get('/suit/kids', [SuitController::class, 'kids']); //jas anak 
Route::get('/this/suit/{name}/{code}', [SuitController::class, 'detailSuit']); //detail suit

// dashboard penyewaan
Route::get('/dashboard/penyewaan', [ControllerDashboardPenyewaan::class, 'index'])->middleware('admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
