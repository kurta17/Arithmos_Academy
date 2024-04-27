<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/question/submit', [TestController::class, 'submit'])->name('submit');
Route::get('/update/{id}', [TestController::class, 'update'])->name('update'); // Corrected route definition

Route::get('/test', [TestController::class, 'index'])->name('test');

// Route::get('/question/{grade_id}/{number_id}', [TestController::class, 'show'])->name('question.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('contact', function () {
    return view('contact');
});

require __DIR__.'/auth.php';
