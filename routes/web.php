<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {

    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        return redirect('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

Route::get('/panel', function () {
    return view('panel');
})->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();

    return redirect('/login');
});

Route::post('/pedidos', [PedidoController::class, 'guardar']);