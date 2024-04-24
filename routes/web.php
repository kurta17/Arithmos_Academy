<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('grade', GradeController::class);
Route::get('/question', [TestController::class, 'index'])->name('question.index');
//create for loop to display the questions one by one with index from 1 to 10
Route::get('/question/{id}', [TestController::class, 'show'])->name('test.show');
Route::post('/submit', 'TestController@submit')->name('submit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/test', [GradeController::class, 'index'])->name('grades.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('contact', function () {
    return view('contact');
});

require __DIR__.'/auth.php';
