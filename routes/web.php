<?php

use App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');
Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');
Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');
Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');
Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');
Route::get('/account', AccountController::class)->name('account');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
