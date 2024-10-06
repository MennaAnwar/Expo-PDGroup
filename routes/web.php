<?php

use App\Http\Controllers\ProductController;
use App\View\Components\SubPages;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})-> name('home');


Route::get('/products/{slug}', function ($slug) {
    return view('pages.product-details', ['slug' => $slug]);
})->where('slug', '.*')->name('productDetails');


// Route for sub-pages
Route::get('/{slug}', function ($slug) {
    return view('pages.subPages', ['component' => new SubPages($slug)]);
})->name('subPage');