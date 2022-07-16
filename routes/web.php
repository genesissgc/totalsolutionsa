<?php

use App\Http\Controllers\SendEmailController;
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

// Index
Route::get('/', function () {
    return view('welcome');
})->name('home');

// About us
Route::get('about-us', function () {
    return view('about_us');
})->name('about-us');

// Vision and Mission
Route::get('vision-and-mission', function () {
    return view('vision_and_mission');
})->name('vision-and-mission');

// Brands
Route::prefix('brands')->group(function () {
    Route::get('/grundfos', function () {
        return view('brands.grundfos');
    })->name('brands.grundfos');

    Route::get('/master-builders', function () {
        return view('brands.master-builders');
    })->name('brands.master-builders');

    Route::get('/ebara', function () {
        return view('brands.ebara');
    })->name('brands.ebara');
});

// Products
Route::get('products', function () {
    return view('products');
});

// Master Builder
Route::prefix('products/master-builder')->group(function () {
    Route::get('/master-x-seed', function () {
        return view('product.master_builder.master_x_seed');
    }); 
});

Route::prefix('products/ebara')->group(function () {
    Route::get('/model_evms_series', function () {
        return view('product.ebara.model_evms_series');
    });
    Route::get('/model_gs', function () {
        return view('product.ebara.model_gs');
    }); 
    Route::get('/model_fs', function () {
        return view('product.ebara.model_fs');
    }); 
    Route::get('/model_ibl', function () {
        return view('product.ebara.model_ibl');
    }); 
});

// Organizational Structure
Route::get('organizational-structure', function () {
    return view('organizational_structure');
});

// Contact us
Route::get('contact-us', function () {
    return view('contact_us');
});

// Send Email from Contact Form
Route::get('send-email', [SendEmailController::class, 'index']);

//Localization
Route::get('lang/{lang}' , ['as' => 'lang.switch','uses' => 'App\Http\Controllers\LanguageController@switchLang']);