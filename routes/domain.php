<?php


use Illuminate\Support\Facades\Route;


Route::domain('{domain}')->group(function () {
    Route::get('/', function ($domain) {
        return "Hello $domain, Welcome to our company domain.";
    });

    Route::get('/home', function ($domain) {
        return "Hello $domain, Welcome to our company domain home page.";
    });
});

//Route::group(['domain' => '{domain}'], function () {
//    Route::get('/', function ($domain) {
//        return "Hello $domain, Welcome to our company domain.";
//    });
//
//    Route::get('/home', function ($domain) {
//        return "Hello $domain, Welcome to our company domain home page.";
//    });
//});