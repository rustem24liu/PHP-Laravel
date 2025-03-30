<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assignment2', [AssignmentController::class, 'index']);
