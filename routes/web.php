<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->controller(AuthController::class)->group(function() {

    Route::get      ('/login',    'showLogin'   )->name('show.login'   );
    Route::post     ('/login',    'login'       )->name('login'        );
    Route::get      ('/register', 'showRegister')->name('show.register');
    Route::post     ('/register', 'register'    )->name('register'     );
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->controller(NinjaController::class)->group(function () {

    Route::get      ('/ninjas',         'index'  )->name('ninjas.index'  );
    Route::post     ('/ninjas',         'store'  )->name('ninja.store'   );
    Route::get      ('/ninjas/create',  'create' )->name('ninjas.create' );
    Route::get      ('/ninjas/{ninja}', 'show'   )->name('ninjas.show'   );
    Route::delete   ('/ninjas/{ninja}', 'destroy')->name('ninjas.destroy');
});
