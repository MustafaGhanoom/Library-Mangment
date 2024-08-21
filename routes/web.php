<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware(['auth','check.role'])->group (function () {
    Route::get('/books/create', [BookController::class,'create'])->name('books.create');
    Route::post('/books', [BookController::class,'store'])->name('books.store');

    Route::get('/books', [BookController::class,'index'])->name('books');

    Route::get('/books/{book}/edit', [BookController::class,'edit'])->name('books.edit');//{id الكتاب}
    Route::put('/books/{book}', [BookController::class,'update'])->name('books.update');//{id الكتاب}

    Route::delete('/books/{book}', [BookController::class,'destroy'])->name('books.destroy');//{id الكتاب}


    // --------------------------------------

    Route::get('/categories/create', [CategoryController::class,'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class,'store'])->name('categories.store');

    Route::get('/categories', [CategoryController::class,'index'])->name('categories');

    Route::get('/categories/{category}/edit', [CategoryController::class,'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class,'update'])->name('categories.update');

    Route::delete('/categories/{category}', [CategoryController::class,'destroy'])->name('categories.destroy');

    //------------------------------------------------

    Route::get('/users/create', [UserController::class,'create'])->name('users.create');
    Route::post('/users', [UserController::class,'store'])->name('users.store');

    Route::get('/users', [UserController::class,'index'])->name('users');

    Route::delete('/users/{user}', [UserController::class,'destroy'])->name('users.destroy');

//----------------------------------------------------------'


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
        \Illuminate\Support\Facades\Log::info('Locale switched to: ' . $locale);
    }
    return redirect()->back();
})->name('setLanguage');

});

Route::get('/books/{book}', [BookController::class,'show'])->name('books.sho');
// -----------------------------------------------------------------------------------


Route::get('/Library', [CategoryController::class,'indexcategory']);

Route::get('/Available-books', [CategoryController::class,'availablebooks']);

Route::get('/Show-books', [UserController::class,'bookuser']);




Route::middleware(['check.role'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');
    })->name('dashboard');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});


require __DIR__.'/auth.php';

