<?php

use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'index'])->name('homepage');
Route::get('about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::post('message/send', [WebsiteController::class, 'sendMessage'])->name('message.send');
Route::get('services/software-consultancy', [WebsiteController::class, 'consultancy'])->name('consultancy');
Route::get('services/web-mobile-development', [WebsiteController::class, 'web'])->name('web_development');
Route::get('services/user-experience-design', [WebsiteController::class, 'design'])->name('user_design');
Route::get('services/strategy-planning', [WebsiteController::class, 'planning'])->name('strategy_planning');
