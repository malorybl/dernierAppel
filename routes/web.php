<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthFormController;
use App\Http\Controllers\ChapterController;
use Illuminate\Support\Facades\Auth;

Route::get('/book', function () {
    if (Auth::check()) {
        return view('myApp'); // Si connecté → afficher l’app Vue
    } else {
        return redirect()->route('login'); // Sinon → rediriger vers /login
    }
});


//FORMULAIRES DE LOGIN LOGOUT REGISTER
// Login / Register avec noms pour le middleware
Route::get('/register', [AuthFormController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthFormController::class, 'register']);
Route::get('/login', [AuthFormController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthFormController::class, 'login']);
Route::post('/logout', [AuthFormController::class, 'logout'])->name('logout');



    Route::get('/', function () {
        return view('home');
    })->middleware('auth');

// Route Vue (affichage)
Route::get('/chapter/{id}', function () { //chapter id
    return view('myApp');
})->middleware('auth');

// Route API (données JSON)
Route::get('api/chapters/{id}', [ChapterController::class, 'show'])->middleware('auth'); //chapters
    
