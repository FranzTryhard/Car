<?php

use Illuminate\Support\Facades\Route;
use App\Models\Verse;

Route::get('/daily-verse', function () {
    return Verse::inRandomOrder()->first();
});

Route::get('/Verse', function () {
    return Verse::all();
});
