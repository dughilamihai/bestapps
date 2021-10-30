<?php

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



error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$domain =request()->getSchemeAndHttpHost();

switch($domain){
    case env('DOMAIN_DE'):
        $locale = 'de';
        break;
    case env('DOMAIN_RO'):
        $locale = 'ro';
        break;
    case 'DOMAIN_COM':
        $locale = 'en';
        break;
    default:
        $locale = 'en';
};
$locale = 'en';
App::setlocale($locale);

//Static pages
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('homepage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
