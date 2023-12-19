<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnController;
use App\Http\Controllers\PublicController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class,'home'])->name('home');

Route::get('/Services',[PublicController::class,'services'])->name('services');
Route::get('/Services/Show/{serviceId}',[PublicController::class,'serviceId'])->name('servicesShow');


Route::get('/Announcements',[AnnController::class,'index'])->name('Ann.index');

Route::get('/Announcements/show/{id}',[AnnController::class,'show'])->name('Ann.show');

Route::get('/Announcement/create',[AnnController::class,'create'])->name('Ann.create');

Route::post('/Announcement/store',[AnnController::class,'store'])->name('Ann.store');