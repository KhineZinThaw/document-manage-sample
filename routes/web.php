<?php

use App\Http\Controllers\DocumentFormController;
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

Route::get('/forms', [DocumentFormController::class, 'index'])->name('forms.index');
Route::get('/', [DocumentFormController::class, 'create'])->name('forms.create');
Route::post('/forms/store', [DocumentFormController::class, 'store'])->name('forms.store');
Route::get('/forms/export', [DocumentFormController::class, 'export'])->name('forms.export');