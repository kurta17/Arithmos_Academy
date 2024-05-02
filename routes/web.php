<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\QuestionTriedController;

// for home page
Route::get('/',[WelcomeController::class, 'show'])->name('welcome');    
// FOR TEST
Route::get('/test', [TestController::class, 'index'])->name('test');

//FOR CONTACT
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard',[WelcomeController::class, 'dashboard'])->name('dashboard');
    // take question from user
    Route::post('/questions/store', [QuestionController::class, 'store'])->name('question.store');
    Route::get('/question/create', [QuestionController::class, 'create'])->name('question.create');
    // see the user progress
    Route::post('/questionstrieds/update', [QuestionTriedController::class, 'store'])->name('questionstrieds.store');
    Route::get('/questionstrieds/{id}', [QuestionTriedController::class, 'show'])->name('questionstrieds.show');

});


require __DIR__.'/auth.php';
