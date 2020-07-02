<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Render view
Route::get('/', function () {
    return view('home');
});

// CRUD API route
Route::resource('todo','CrudController');
