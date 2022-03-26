<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkrController;

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

Route::get('/', [UkrController::class, 'index']);
Route::get('/library', [UkrController::class, 'library']);
Route::get('/contacts', [UkrController::class, 'contacts']);
Route::get('/team-teachers', [UkrController::class, 'teamlead']);
Route::get('/studkom', [UkrController::class, 'studkom']);
Route::get('/rating', [UkrController::class, 'rating']);
Route::get('/social-scholarship', [UkrController::class, 'sociasolar']);
Route::get('/academic-scholarship', [UkrController::class, 'academsolar']);
Route::get('/dorm', [UkrController::class, 'dorm']);
Route::get('/news', [UkrController::class, 'news']);
Route::get('/news/{slug}', [UkrController::class, 'show'])->name('show');
Route::get('/educational-events', [UkrController::class, 'eduevents']);
Route::get('/material-and-technical-support', [UkrController::class, 'materials']);
Route::get('/prospective-student', [UkrController::class, 'prospectivestudent']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/posts', function () {
    return view('posts');
})->middleware(['auth'])->name('posts');


require __DIR__.'/auth.php';
