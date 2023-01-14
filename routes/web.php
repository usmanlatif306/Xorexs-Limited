<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
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

// sitemap
Route::get('sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.xml');

Route::get('/', [WebsiteController::class, 'index'])->name('homepage');
Route::get('about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::post('message/send', [WebsiteController::class, 'sendMessage'])->name('message.send');
Route::get('services', [WebsiteController::class, 'consultancy'])->name('services');
Route::get('services/software-consultancy', [WebsiteController::class, 'consultancy'])->name('consultancy');
Route::get('services/web-mobile-development', [WebsiteController::class, 'web'])->name('web_development');
Route::get('services/user-experience-design', [WebsiteController::class, 'design'])->name('user_design');
Route::get('services/strategy-planning', [WebsiteController::class, 'planning'])->name('strategy_planning');


// admin routes
Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    // setting routes
    Route::get('socials', [SettingController::class, 'socials'])->name('socials');
    Route::get('seo', [SettingController::class, 'seo'])->name('seo');
    Route::post('clear', [SettingController::class, 'clear'])->name('clear');
    Route::post('cache', [SettingController::class, 'cache'])->name('cache');
    Route::post('settings/update', [SettingController::class, 'update'])->name('settings.update');
});
