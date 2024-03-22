<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/paginas', function () {
        return view('paginas');
    })->name('paginas');
    Route::get('/usuarios', function () {
        return view('usuarios');
    })->name('usuarios');
    Route::get('/roles', function () {
        return view('roles');
    })->name('roles');
});
