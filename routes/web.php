<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('connexion');
}); 

 Route:: post('/dashboard', function(){
    return view('dashboard');

 });
