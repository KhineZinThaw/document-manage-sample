<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentFormController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\StudentFormController;
use App\Http\Controllers\TeacherFormController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/forms', [DocumentFormController::class, 'index'])->name('forms.index');
    Route::get('/forms/create', [DocumentFormController::class, 'create'])->name('forms.create');
    Route::post('/forms/store', [DocumentFormController::class, 'store'])->name('forms.store');
    Route::get('/forms/export', [DocumentFormController::class, 'export'])->name('forms.export');

    Route::get('/student-form', [StudentFormController::class, 'index'])->name('student_form.index');
    Route::post('/student-form/preview', [StudentFormController::class, 'confirm'])->name('student_form.confirm');
    Route::post('/student-form', [StudentFormController::class, 'store'])->name('student_form.store');
    Route::get('/student-form/export', [StudentFormController::class, 'export'])->name('student_form.export');

    Route::get('/teacher-form', [TeacherFormController::class, 'index'])->name('teacher_form.index');
    Route::post('/teacher-form/preview', [TeacherFormController::class, 'confirm'])->name('teacher_form.confirm');
    Route::post('/teacher-form', [TeacherFormController::class, 'store'])->name('teacher_form.store');
    Route::get('/teacher-form/export', [TeacherFormController::class, 'export'])->name('teacher_form.export');

    Route::get('/export-all', [ExportController::class, 'exportAll'])->name('export_all');
});

require __DIR__.'/auth.php';
