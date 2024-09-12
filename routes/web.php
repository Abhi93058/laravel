<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('query');
});



 
Route::controller(UserController::class)->group(function () {
    Route::get('user-index', 'UserIndex')->name('user.index');
    Route::get('user-create', 'UserCreate')->name('user.create');
    Route::post('user-store', 'UserStore')->name('user.store');
    Route::get('user-edit-{id}','UserEdit')->name('user.edit');
    Route::post('user-update-{id}','UserUpdate')->name('user.update');
    Route::get('user-delete-{id}','UserDelete')->name('user.delete');
});