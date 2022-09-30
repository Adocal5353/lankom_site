<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ImmobilierController;
use App\Http\Controllers\Import_ExportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/',[WelcomeController::class,'index'])->name('accueil');

Route::get('/services',[ServicesController::class,'index'])->name('services');

Route::get('/Contact',[ContactController::class,'index'])->name('contact');

Route::get('/service/education',[EducationController::class,'index'])->name('service.education');

Route::get('/service/voyage',[VoyageController::class,'index'])->name('service.voyage');

Route::get('/service/immobilier',[ImmobilierController::class,'index'])->name('service.immobilier');

Route::get('/service/import_export',[Import_ExportController::class,'index'])->name('service.import_export');

Route::post('/mailTo',[ContactController::class,'mailTo'])->name('mailTo');
