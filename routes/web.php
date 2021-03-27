<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Form\TestController;
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

Route::get('/usuarios', [TestController::class, 'listAllUsers']);
Route::get('/usuarios/novo', [TestController::class, 'formAddUser']);
Route::get('/usuarios/{user}', [TestController::class, 'listUsers']);

Route::get('/usuarios/store', [TestController::class, 'storeUser']);
