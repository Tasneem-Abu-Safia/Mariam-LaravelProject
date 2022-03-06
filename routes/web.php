<?php

use App\Http\Controllers\PublicSite;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;
use App\Http\Controllers;

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
Route::group(
    [
        'prefix' => (new Mcamara\LaravelLocalization\LaravelLocalization)->setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::get('publicsite/home',[PublicSite\HomeController::class,'index']);




Route::get('course_details', function () {
    return view('layout.publicSite.course_details');
});

Route::get('courses', function () {
    return view('layout.publicSite.courses');
});

Route::get('news_page', function () {
    return view('layout.publicSite.news_page');
});
Route::get('news', function () {
    return view('layout.publicSite.news');
});
Route::get('products', function () {
    return view('layout.publicSite.products');
});

Route::get('checkout', function () {
    return view('layout.publicSite.checkout');
});

Route::get('profile', function () {
    return view('layout.publicSite.profile');
});
});
