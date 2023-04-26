<?php

use App\Http\Controllers\Company\ClientCompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
//
//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//
//require __DIR__.'/auth.php';

Route::get('/', function () {
    if (Auth::guest() && !Auth::check()) {
        return redirect()->route('login');
    }
    return redirect()->route('top_page');
});

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::middleware('auth')->group(function () {
    Route::get('/', [TopPageController::class, 'top'])->name('top_page');

    Route::resource('client_companies', ClientCompanyController::class);
});
