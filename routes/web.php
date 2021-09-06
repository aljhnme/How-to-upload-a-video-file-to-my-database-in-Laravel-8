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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fetch_video',[App\Http\Controllers\VideoController::class,'fetch']);

Route::get('/index_u',[App\Http\Controllers\VideoController::class,'index']);

Route::post('/insert_video',[App\Http\Controllers\VideoController::class,'insert'])->name('insert.file');


