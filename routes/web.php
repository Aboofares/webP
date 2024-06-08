<?php

use App\Http\Controllers\Settings\common\CommonSettings;
use App\Http\Controllers\Settings\config\AccountType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::get('/', function () {
        return view('web');
    });

});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'auth']
    ], function(){



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::resource('AccountType', AccountType::class);


    Route::controller(CommonSettings::class)->group(function () {
        Route::get('/Settings', 'index');

//        Route::get('/Settings/Nationality', 'IndexNationality');
//        Route::post('/Settings/Nationality/Add', 'IndexNationalityAdd');
//        Route::post('/Settings/Nationality/Update', 'NationalityUpdate');
//        Route::post('/Settings/Nationality/Delete', 'NationalityDelete');
    });
});
