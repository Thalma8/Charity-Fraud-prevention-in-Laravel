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


Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'redirect'])-> middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_verified_groups_view', [AdminController::class,'addview']);
Route::post('/upload_verified', [AdminController::class,'upload']);
Route::get('/postevent', [HomeController::class,'postevent']);
Route::post('/uploadevent', [HomeController::class,'uploadevent']);

Route::post('/requests', [HomeController::class,'requests']);
Route::post('/reports', [HomeController::class,'reports']);
Route::get('/verificationstatus', [HomeController::class,'verificationstatus']);
Route::get('/cancel_request/{id}', [HomeController::class,'cancel_request']);
Route::get('/cancel_report/{id}', [HomeController::class,'cancel_report']);
Route::get('/reports', [AdminController::class,'reports']);

Route::get('/showrequests', [AdminController::class,'showrequests']);
Route::get('/accepted/{id}', [AdminController::class,'accepted']);
Route::get('/denied/{id}', [AdminController::class,'denied']);
Route::get('/escalated/{id}', [AdminController::class,'escalated']);
Route::get('/closed/{id}', [AdminController::class,'closed']);
Route::get('/suspended/{id}', [AdminController::class,'suspended']);
Route::get('/showverified_groups', [AdminController::class,'showverified_groups']);
Route::get('/revokeveri/{id}', [AdminController::class,'revokeveri']);
Route::get('/updateverified/{id}', [AdminController::class,'updateverified']);
Route::post('/editveri/{id}', [AdminController::class,'editveri']);
Route::get('/emailview/{id}', [AdminController::class,'emailview']);
Route::post('/sendemail/{id}', [AdminController::class,'sendemail']);
Route::get('fraudreport', [HomeController::class,'fraudreport']);
Route::get('about', [HomeController::class,'about']);
Route::get('/reportedcases', [HomeController::class,'reportedcases']);
