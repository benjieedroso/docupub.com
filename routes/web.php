<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/document',[DocumentController::class, 'index'])->name('document.index');
Route::get('/document/create',[DocumentController::class, 'create'])->name('document.create');
Route::post('/document/upload',[DocumentController::class, 'store'])->name('document.store');
Route::get('/document/download',[DocumentController::class, 'downloadFile'])->name('document.download');
Route::get('/document/search', [DocumentController::class,'search'])->name('document.search');
Route::get('/document/delete', [DocumentController::class,'deleteDoc'])->name('document.delete');
Route::get('/document/update', [DocumentController::class,'updateDoc'])->name('document.update');
