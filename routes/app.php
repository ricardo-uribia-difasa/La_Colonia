<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Generated by Vemto
|--------------------------------------------------------------------------
|
| It is not recommended to edit this file directly. Although you can do so,
| it will generate a conflict on Vemto's next build.
|
*/

// Dashboard
Route::prefix('/dashboard')
    ->name('dashboard.')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/users', App\Livewire\Dashboard\UserIndex::class)->name(
            'users.index'
        );

        Route::get(
            '/users/create',
            App\Livewire\Dashboard\UserCreate::class
        )->name('users.create');

        Route::get(
            '/users/{user}',
            App\Livewire\Dashboard\UserEdit::class
        )->name('users.edit');

        Route::get(
            '/productos',
            App\Livewire\Dashboard\ProductoIndex::class
        )->name('productos.index');

        Route::get(
            '/productos/create',
            App\Livewire\Dashboard\ProductoCreate::class
        )->name('productos.create');

        Route::get(
            '/productos/{producto}',
            App\Livewire\Dashboard\ProductoEdit::class
        )->name('productos.edit');
    });

// API
Route::prefix('/api')
    ->name('api.')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {});

// Site
Route::prefix('/')->group(function () {});

// Filament Panel
Route::prefix('/panel')
    ->name('panel.')
    ->group(function () {});
