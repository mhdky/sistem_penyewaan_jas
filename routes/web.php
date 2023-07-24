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

// data for live search get email user
Route::get('/sdjfqisdfhef/{getEmail}', [SearchController::class, 'searchGetEmails'])->middleware('admin');

// suit
Route::get('/suit/adult', [SuitController::class, 'index']); // jas dewasa
Route::get('/suit/kids', [SuitController::class, 'kids']); //jas anak 
Route::get('/this/suit/{name}/{code}', [SuitController::class, 'detailSuit']); //detail suit
Route::get('/rent/suit', [SuitController::class, 'rentSuit'])->middleware('auth'); // jas yang disewa

// dashboard penyewaan
Route::get('/dashboard/penyewaan', [ControllerDashboardPenyewaan::class, 'index'])->middleware('admin'); //tampilkan jas yang disewa
Route::get('/dashboard/penyewaan/{suit:code}', [ControllerDashboardPenyewaan::class, 'formRental'])->middleware('admin'); //form dashboar penyewaan
Route::post('/dashboard/penyewaan/{suit:id}', [ControllerDashboardPenyewaan::class, 'rentalSuit'])->middleware('admin'); // masukan data sewaan ke tabel rental
Route::put('/dashboard/penyewaan/{rental:id}', [ControllerDashboardPenyewaan::class, 'finishRentalSuit'])->middleware('admin'); // sewaan telah selesai
Route::get('/dashboard/penyewaan/{rental:id}/edit', [ControllerDashboardPenyewaan::class, 'editRental'])->middleware('admin'); // tampulan edit data rental berdasarkan id
Route::put('/dashboard/penyewaan/{rental:id}/update', [ControllerDashboardPenyewaan::class, 'updateRental'])->middleware('admin'); // update rental ke database rental berdasarkan id

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
