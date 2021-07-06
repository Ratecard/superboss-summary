<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api;

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

Route::get('/json', [api::class, 'index'])->name('report.index');
Route::get('json/{id}',[api::class, 'show'])->name('report.show');
Route::get('json/{id}/mail',[api::class, 'mail'])->name('report.mail');


