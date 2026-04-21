<?php
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [CarController::class, 'index'])->name('home');


Route::get('/tambah', [CarController::class, 'create'])->name('tambah');

Route::post('/tambah', [CarController::class, 'store'])->name('tambah.store');


Route::get('/edit/{id_car}', [CarController::class, 'edit'])->name('edit');
Route::put('/update/{id_car}', [CarController::class, 'update'])->name('update');

Route::delete('/delete/{id_car}', [CarController::class, 'delete'])->name('delete');

