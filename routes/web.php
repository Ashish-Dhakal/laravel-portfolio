<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PortfolioUpdateController;
use App\Models\PortfolioUpdate;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/education',[EducationController::class,'education'])->name('education');
Route::get('/portfolio',[PortfolioUpdateController::class, 'portfolio'])->name('portfolio');
Route::get('/service',[ServiceController::class,'service'])->name('service');
Route::post('about/about_add',[AboutController::class, 'about_add'])->name('about_add');


Route::get('/education',[EducationController::class,'education'])->name('education');
Route::post('education/education_add',[EducationController::class, 'education_add'])->name('education_add');


Route::get('/portfolio',[PortfolioController::class, 'portfolio'])->name('portfolio');
Route::post('portfolio/portfolio_add',[PortfolioController::class, 'portfolio_add'])->name('portfolio_add');

// route related to service
Route::get('/service',[ServiceController::class,'service'])->name('service');
Route::post('service/service_add',[ServiceController::class, 'service_add'])->name('service_add');
