<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes for admin section
Route::middleware(['isAdmin'])->group(function () {
    Route::get('/edit-movie/{id}',[adminController::class,'edit_movie'])->middleware('auth');
    // Dashboard route
    Route::get('/admin-dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');

    // Admin users route
    Route::get('/admin-users', [adminController::class, 'fetchUsers'])->name('admin.users');

    // Admin movies route
    Route::get('/admin-movies', [adminController::class, 'fetchmovies'])->name('admin.movie');
    Route::get('/admin-theater', [adminController::class, 'fetchTheaters'])->name('admin.theater');
    // Admin theater route
    Route::get('/delete-theater/{id}',[adminController::class,'deleteTheater'])->name('admin.theater');
Route::get('/delete-user/{id}',[adminController::class,'deleteUser'])->name('admin.users');
Route::get('/delete-movie/{id}',[adminController::class,'deleteMovie']);

    // Insert movie route
    Route::post('/insert-movie', [adminController::class, 'addMovie'])->name('admin.insert.movie');

    // Insert theater route
    Route::post('/insert-theater', [adminController::class, 'addTheater'])->name('admin.insert.theater');

    // Add movies route
    Route::get('/admin-add-movie', [adminController::class, 'gettheaternames'])->name('admin.add.movies');
   
    // Admin ticket route
    Route::get('/admin-ticket', function () {
        return view('admin.ticket');
    })->name('admin.ticket');

    // Admin add theater route
    Route::get('/admin-add-theater', function () {
        return view('admin.add-theater');
    })->name('admin.add.theater');

    // Admin add package route
    Route::get('/admin-add-package', function () {
        return view('admin.add-package');
    })->name('admin.add.package');

    // Admin packages route
    Route::get('/admin-packages', function () {
        return view('admin.packages');
    })->name('admin.packages');
  
});

// Welcome route
Route::get('/', function () {
    return view('admin.welcome');
})->name('welcome');

// Dashboard route for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();
        if ($user->usertype == 0) {
            return view('admin.welcome');
        } elseif ($user->usertype == 1) {
            return redirect()->route('admin.dashboard');
        } else {
            abort(403, 'Unauthorized access');
        }
    })->name('dashboard');
});
