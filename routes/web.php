<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\QuestionController;


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


Route::get('/', [WelcomeController::class, 'index']);

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin');

// Route::post('/logout', function () {
//     Auth::logout();
//     return view('auth.login');
// })->name('logout');




Route::middleware('auth')->group(function () {
    Route::get('/quiz/{sub_category}', [QuestionController::class, 'awnserQuestion'])->name('quiz');    //il s'agit d'une route avec le paramétre sub_category(permet de recherché les question de la category)
    Route::get('/dashboard', [QuestionController::class,'index'])->middleware('admin');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Route::get('/quiz', [QuizController::class, 'index']);
//Route::post('/quiz', [QuizController::class, 'submit']);

require __DIR__.'/auth.php';
