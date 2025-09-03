<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;

Route::get('/random-car', function () {
    return Car::inRandomOrder()->first();
});

Route::get('/cars', function () {
    return Car::all();
});

