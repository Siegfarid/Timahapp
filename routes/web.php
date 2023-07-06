<?php

use App\Http\Controllers\PendudukController;
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
    return view('app');
});

Route::get('/penduduk', function () {
    return view('pages/datapdd');
});

Route::get('/penduduk/add', function () {
    return view('pages/addpdd');
});

Route::get('/anggota/{id}', [PendudukController::class, 'findWargaWithKeluarga']);
