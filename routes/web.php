<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('User.landing');
});

Route::get('/landing', function () {
    return view('User.landing');
});

Route::get('/about1', function () {
    return view('User.about1');
});

Route::get('/team', function () {
    return view('User.team');
});

Route::get('/process', function () {
    return view('User.process');
});

Route::get('/service', function () {
    return view('User.service');
});

Route::get('/casestud', function () {
    return view('User.casestud');
});

Route::get('/studdetails', function () {
    return view('User.studdetails');
});

Route::get('/contact', function () {
    return view('User.contact');
});

Route::get('/homes', function () {
    return view('User.homes');
});



//Admin Page
Route::get('/Admin', function () {
    return view('admin.baseadmin');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
