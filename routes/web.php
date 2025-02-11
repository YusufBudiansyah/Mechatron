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

//Halaman about us
Route::get('/about1', function () {
    return view('User.about1');
});

Route::get('/team', function () {
    return view('User.team');
});


Route::get('/service', function () {
    return view('User.service');
});

Route::get('/galery', function () {
    return view('User.galery');
});

Route::get('/partnership', function () {
    return view('User.partnership');
});

Route::get('/contact', function () {
    return view('User.contact');
});

Route::get('/homes', function () {
    return view('User.homes');
});

//Halaman Services
Route::get('/survival', function () {
    return view('User.survival');
});

Route::get('/treshold', function () {
    return view('User.treshold');
});

Route::get('/waystage', function () {
    return view('User.waystage');
});

Route::get('/milestone', function () {
    return view('User.milestone');
});

Route::get('/stage', function () {
    return view('User.stage');
});

//Halaman Paartnership
Route::get('/workshop', function () {
    return view('User.workshop');
});


Route::get('/event', function () {
    return view('User.event');
});


Route::get('/ekstrakulikuler', function () {
    return view('User.ekstrakulikuler');
});


//Halaman Product
Route::get('/product', function () {
    return view('User.product');
});
Route::get('/nxtmind', function () {
    return view('User.nxtmind');
});
Route::get('/techmachine', function () {
    return view('User.techmachine');
});
Route::get('/brick', function () {
    return view('User.brick');
});
Route::get('/wedo', function () {
    return view('User.wedo');
});
Route::get('/linefollow', function () {
    return view('User.linefollow');
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
