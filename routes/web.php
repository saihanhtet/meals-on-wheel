<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// view -> it is for the blade php pages
// inertia -> it is for the react routes pages
Route::get('/', function () {
    return inertia('Home');
});
