<?php

use App\Livewire\AboutUs;
use App\Livewire\BlogGrid;
use App\Livewire\ContactUs;
use App\Livewire\Multimedia;
use App\Livewire\News;
use App\Livewire\Products;
use App\Livewire\Servicios;
use App\Livewire\ShowHome;
use Illuminate\Support\Facades\Route;



//Route::get('/', ShowHome ::class) ->name('home');
Route::get('/', ShowHome::class)->name('home');
Route::get('/ContactUs', ContactUs::class)->name('contactUs');
Route::get('/about', AboutUs::class)->name('aboutuS');
Route::get('/product', Products::class)->name('productS');
Route::get('/block', BlogGrid::class)->name('blogGrid');
Route::get('/servicios', Servicios::class)->name('services');
Route::get('/Noticias', News::class)->name('News');
Route::get('/multimedia', Multimedia::class)->name('Multimedia');





