<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbhiController;

Route::get('/', function () {
    return view('index2');
});



 
Route::controller(UserController::class)->group(function () {
    Route::get('user-index', 'UserIndex')->name('user.index');
    Route::get('user-create', 'UserCreate')->name('user.create');
    Route::post('user-store', 'UserStore')->name('user.store');
    Route::get('user-edit-{id}','UserEdit')->name('user.edit');
    Route::post('user-update-{id}','UserUpdate')->name('user.update');
    Route::get('user-delete-{id}','UserDelete')->name('user.delete');


   

});

Route::controller(AbhiController::class)->group(function () {
    Route::get('user-index2', 'UserIndex')->name('user.index2');
    Route::get('user-create2', 'UserCreate')->name('user.create2');
    Route::post('user-store2', 'UserStore')->name('user.store2');


});