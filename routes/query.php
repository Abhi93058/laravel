<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

// Route to show the form
Route::get('/user/form', [QueryController::class, 'showForm']);

// Route to handle form submission
Route::post('/user/store', [QueryController::class, 'store']);
