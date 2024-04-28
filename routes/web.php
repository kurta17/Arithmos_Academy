<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});



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

Route::post('/submit', [TestController::class, 'store'])->name('submit');


// Route to show the question creation form
Route::get('/question/create', [TestController::class, 'create'])->name('question.create');

// Route to handle the submission of the question creation form
//Route::post('/questions', [TestController::class, 'store'])->name('questions.store');

// Route to display the contact page
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

// Route to handle form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

require __DIR__.'/auth.php';
