<?php

use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Route::get('/barang',[EmployeeController::class, 'index'])->name('barang');
Route::get('/tambahbarang',[EmployeeController::class, 'tambahbarang'])->name('tambahbarang');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');