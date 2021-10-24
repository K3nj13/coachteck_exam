<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
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

Route::get('/index2', [PeopleController::class, 'index2']);
Route::post('/confirm2', [PeopleController::class, 'confirm2']);
Route::post('/regist2', [PeopleController::class, 'regist2']);
Route::get('/find2', [PeopleController::class, 'find2']);
Route::post('/find2', [ContactsController::class, 'search']);
Route::get('/bind', [ContactsController::class, 'bind']);