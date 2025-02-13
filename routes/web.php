<?php

use Illuminate\Support\Facades\Route;

Route::get('', fn() => view('index'))->name('index');
Route::get('about', fn() => view('about'))->name('about');
Route::get('contact', fn() => view('contact'))->name('contact');
Route::get('leadership', fn() => view('leadership'))->name('leadership');

Route::get('blog', fn() => view('blog'))->name('blog');
Route::get('blog/{slug}', fn() => view('blogView'))->name('blog.show');
 
Route::get('events', fn() => view('events'))->name('events');
Route::get('events/{slug}', fn() => view('event-show'))->name('events.show');

Route::get('gallery', fn() => view('gallery'))->name('gallery');
Route::get('donate', fn() => view('donate'))->name('donate');
Route::get('donate-now', fn() => view('donate-now'))->name('donate.now');
Route::get('quran', fn() => view('quran'))->name('quran');