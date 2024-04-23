<?php

use App\Http\Controllers\JobController;
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

Route::get('/jobs',[JobController::class,'index'])->name('jobs.index');
Route::get('/jobs/create',[JobController::class,'create'])->name('jobs.create');
Route::post('/jobs/store',[JobController::class,'store'])->name('jobs.store');
Route::get('/jobs/show',[JobController::class,'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit',[JobController::class,'edit'])->name('jobs.edit');
Route::delete('/jobs/{job}',[JobController::class,'delete'])->name('jobs.delete');
Route::patch('/jobs/{job}',[JobController::class,'update'])->name('jobs.update');
Route::get('/jobs/display/{job}',[JobController::class,'display'])->name('jobs.display');



