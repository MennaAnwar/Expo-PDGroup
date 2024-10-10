<?php

use App\View\Components\Resources;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})-> name('home');

Route::get('/resources/{slug}', function ($slug) {
    return view('pages.resources', ['component' => new Resources($slug)]);
})->name('resources');