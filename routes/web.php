<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/home',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_job_view',[AdminController::class,'addview']);

Route::post('/appoinment',[HomeController::class,'appoinment']);

Route::post('/upload_job',[AdminController::class,'upload']);

Route::get('/myappoinment',[HomeController::class,'myappoinment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showapp',[AdminController::class,'showapp']);

Route::get('/approve/{id}',[AdminController::class,'approve']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showjob',[AdminController::class,'showjob']);

Route::get('/deletejob/{id}',[AdminController::class,'deletejob']);

Route::get('/updatejob/{id}',[AdminController::class,'updatejob']);

Route::post('/editjob/{id}',[AdminController::class,'editjob']);

Route::post('/search',[HomeController::class,'search']);

//Route::get('/browse', function () {
    //return view('user.browse');});

Route::get('/browse',[HomeController::class,'browse']);



