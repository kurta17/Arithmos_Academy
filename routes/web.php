<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('grades', GradeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('test', TestController::class);

Route::get('contact', function () {
    return view('contact');
});

Route::get('test', function () {
    return view('test');
    // connect the test to grade like \test\2 means grade 2 page which is a question.blade.php

});


require __DIR__.'/auth.php';
