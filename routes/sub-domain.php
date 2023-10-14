<?php

use Illuminate\Support\Facades\Route;

// Try based on domain function

//Route::domain('{account}.laravel-10-domain.test')->group(function () {
//    Route::get('/', function ($domain) {
//        return "Hello $domain, Welcome to our company sub-domain.";
//    });
//
//    Route::get('/home', function ($domain) {
//        return "Hello $domain, Welcome to our company sub-domain home page.";
//    });
//});


Route::group(['domain' => '{account}.laravel-10-domain.test'], function () {
    Route::get('/', function ($domain) {
        return "Hello $domain, Welcome to our company sub-domain.";
    });

    Route::get('/home', function ($domain) {
        return "Hello $domain, Welcome to our company sub-domain home page.";
    });
});