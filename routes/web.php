<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//jobs
Route::get('/ ', [App\Http\Controllers\JobController::class, 'index']);
Route::get('/jobs/create ', [App\Http\Controllers\JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs/create ', [App\Http\Controllers\JobController::class, 'store'])->name('job.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jobs/{id}/{job}', [App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');
//company
Route::get('/company/{id}/{company}', [App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
Route::get('company/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('company.view');
Route::post('company/create', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
Route::post('company/coverphoto', [App\Http\Controllers\CompanyController::class, 'coverPhoto'])->name('cover.photo');
Route::post('company/logo', [App\Http\Controllers\CompanyController::class, 'companyLogo'])->name('company.logo');



//user profile
Route::get('user/profile', [App\Http\Controllers\UserController::class, 'index']);
Route::post('user/profile/create', [App\Http\Controllers\UserController::class, 'store'])->name('profile.create');
Route::post('user/coverletter', [App\Http\Controllers\UserController::class, 'coverletter'])->name('cover.letter');
Route::post('user/resume', [App\Http\Controllers\UserController::class, 'resume'])->name('resume');
Route::post('user/avatar', [App\Http\Controllers\UserController::class, 'avatar'])->name('avatar');

//employer view
Route::view('employer/register','auth.employer-register')->name('employer.register');
Route::post('employer/register', [App\Http\Controllers\EmployerRegisterController::class, 'employerRegister'])->name('emp.register');


