<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

use App\Http\Controllers\GreetController;

Route::get('/greet', [GreetController::class, 'show']);

?>