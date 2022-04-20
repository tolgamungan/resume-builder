<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Get requests
Route::get('/welcome', function () {return view('welcome');});
Route::get('/', function () {return view('welcome');});
Route::get('/index', [App\Http\Controllers\ResumeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/resume/{id}', [App\Http\Controllers\ResumeController::class, 'resume'])->name('resume');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
Route::get('/admin/allResumes', [App\Http\Controllers\AdminController::class, 'allResumes'])->name('admin.allResumes');

// Post requests
Route::post('/create', 'App\Http\Controllers\ResumeController@create')->name('create');
Route::post('/admin/editItem/{id}', 'App\Http\Controllers\AdminController@editSubmit')->name('admin.editItem');

// Delete requests
Route::delete('/admin/delete/{id}', 'App\Http\Controllers\AdminController@destroy')->name('admin.delete');
Route::delete('/admin/deleteResume/{id}', 'App\Http\Controllers\AdminController@destroyResume')->name('admin.deleteResume');


Auth::routes();
