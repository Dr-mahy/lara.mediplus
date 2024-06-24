<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\controllers\FrontPages;
use App\HTTP\controllers\Doctors;
use App\HTTP\controllers\Contact;
use App\HTTP\controllers\Blog;
use App\HTTP\controllers\Services;
use App\HTTP\controllers\Pages;
Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::get('test', function () {
    return view('test');
});
Route::get('/',[FrontPages::class,'home'])->name('home');
Route::get('doctors',[Doctors::class,'doctors'])->name('doctors');
Route::get('contact',[contact::class,'contact'])->name('contact');
Route::get('blog',[Blog::class,'blog'])->name('blog');
Route::get('services',[Services::class,'services'])->name('services');
Route::get('pages',[Pages::class,'pages'])->name('pages');
    });