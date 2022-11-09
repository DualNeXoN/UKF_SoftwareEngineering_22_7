<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('home');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

//Test translations
Route::get('/translations', function () {
    return view('translations');
});

Route::get('/translations/{param}', function ($param) {
    return view('translations', compact('param'));
});
//End of: Test translations

//Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'loginUser'])->name('login-user');
Route::get('/logout',[LoginController::class,'Logout']);



Route::get('/students', function () {
    return view('students');
});

Route::get('/companies', function () {
    return view('companies');
});

