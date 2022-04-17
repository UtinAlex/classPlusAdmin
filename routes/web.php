<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;

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

Route::get('/', [FormController::class, 'getForm']);
Route::post('/contact-form', [FormController::class, 'saveContact']);
Route::get('/contact-form', [FormController::class, 'getForm']);
Route::get('/get-page', [PageController::class, 'getPage']);
