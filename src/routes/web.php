<?php
use App\Helpers\Graph\GraphHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\UserController;
use App\CustomClasses\GraphData;
use App\Http\Controllers\AuthorizedWorker;
use \App\CustomClasses\Download;

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


//End of: Auth System

Route::get('/admin/companies', function () {
    return view('admincompanies');
});

Route::get('/admin/departments', function () {
    return view('admindepartments');
});

// link na stahovanie reportu o praxi
Route::get('/download/report',[Download::class,'download']);
//Student
Route::get('/student/profile/{id}', [UserController::class,'userProfile']);
Route::get('/student/practicereport',[UserController::class,'practiceReport']);
//Company
Route::get('/company/person',[CompanyController::class,'companyPractices']);
Route::post('company/person/add-practice',[CompanyController::class,'addPractice'])->name('addPractice');
Route::post('company/person/update-practice',[CompanyController::class,'updatePractice'])->name('updatePractice');
Route::delete('/company/person/delete-practice/{id}',[CompanyController::class,'deletePractice']);
Route::get('/company/profile/{id}', [CompanyController::class,'companyProfile'])->name('company-profile');
Route::get('/company/', [CompanyController::class,'getAllCompanies']);

//Admin
Route::delete('delete-user/{user}',[AdminController::class,'removeUser']);
Route::post('admin/users/reset-password', [AdminController::class,'resetPassword']);
Route::get('/admin/users', [AdminController::class,'getUsers']);
Route::post('register',[RegisterController::class,'register'])->name('register-user');

//Practices
Route::get('/practice/list', [PracticeController::class, 'getAllPractices']);
Route::post('/practice/assign',[PracticeController::class,'assignStudent'])->name('practice-assign-student');
Route::get('practice/profile/{id}',[PracticeController::class,'getPractice'])->name('practice-profile');

//AuthorizedWorker
Route::get('/worker/practices',[AuthorizedWorker::class,'getAllPractices']);
Route::get('/worker/practices/show/{id}',[AuthorizedWorker::class,'show']);
Route::get('/worker/practices/show/{id}/refuse',[AuthorizedWorker::class,'refuse']);

Route::get('/graph/show', function () {
    return view('graph');
});

Route::get('/graph/data', function () {
    return GraphHelper::staticData();
});
Route::get('/charts/data/assignedpractices',[GraphData::class,'assignedPractices']);


