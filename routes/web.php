<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home', ['title' => 'Home'])->name('home');
Route::view('/about', 'pages.about', ['title' => 'About'])->name('about');
Route::view('/contact', 'pages.contact', ['title' => 'Contact'])->name('contact');
