<?php

use Illuminate\Support\Facades\Route;
// use MongoDB;
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

Route::get('/', function () {
    // return view('welcome');
    $client = new MongoDB\Client(
        'mongodb://root:example@mongo:27017/'
    );
    $db = $client->test;
});
