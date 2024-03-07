<?php

use App\Http\Controllers\DictionaryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('dictionary/index', [DictionaryController::class, 'index'])->name('dictionary.index');
Route::get('dictionary/create', [DictionaryController::class, 'create'])->name('dictionary.create');
Route::post('dictionary/store', [DictionaryController::class, 'store'])->name('dictionary.store');
Route::get('dictionary/{dictionary}/edit', [DictionaryController::class, 'edit'])->name('dictionary.edit');
Route::put('dictionary/{dictionary}', [DictionaryController::class, 'update'])->name('dictionary.update');
Route::delete('/dictionary/{dictionary}', [DictionaryController::class, 'destroy'])->name('dictionary.destroy');