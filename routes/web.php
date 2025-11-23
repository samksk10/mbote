<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// page de connexion (GET)
Route::get('/', function () {
    return view('connexion');
})->name('login');

// traitement du formulaire de connexion (POST)
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors(['email' => 'Identifiants invalides'])->withInput();
});

// affichage du tableau de bord (GET) — protégé par auth et envoie des compteurs
Route::get('/dashboard', function () {
    $usersCount = \App\Models\User::count() ?? 0;
    $messagesCount = class_exists(\App\Models\Message::class) ? \App\Models\Message::count() : 0;
    $salesCount = class_exists(\App\Models\Sale::class) ? \App\Models\Sale::count() : 0;

    return view('dashboard', compact('usersCount', 'messagesCount', 'salesCount'));
})->middleware('auth');