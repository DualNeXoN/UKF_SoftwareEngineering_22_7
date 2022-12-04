<?php

use App\Helpers\Graph\GraphHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PracticeController;

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


Route::post('/login',[LoginController::class,'loginUser'])->name('login-user');
Route::get('/logout',[LoginController::class,'Logout']);
Route::post('register',[RegisterController::class,'register'])->name('register-user');

//End of: Auth System

Route::get('/students', function () {
    return view('students');
});





Route::get('/admin/companies', function () {
    return view('admincompanies');
});

Route::get('/admin/departments', function () {
    return view('admindepartments');
});

Route::get('/company/person', function () {
    return view('companyperson');
});

Route::delete('delete-user/{user}',[AdminController::class,'removeUser']);
Route::post('admin/users/reset-password', [AdminController::class,'resetPassword']);
Route::get('/admin/users', [AdminController::class,'getUsers']);
Route::get('/{id}', [CompanyController::class,'getCompany']);
Route::get('/companies', [CompanyController::class,'getAllCompanies']);

Route::get('/practice/list', [PracticeController::class, 'getAllPractices']);
Route::post('/practice/assign',[PracticeController::class,'assignStudent'])->name('practice-assign-student');

Route::get('/graph/show', function () {
    return view('graph');
});

Route::get('/graph/data', function () {
    return GraphHelper::staticData();
});