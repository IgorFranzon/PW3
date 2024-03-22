<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/aluno/{name}/{lastname}/{age}/{rm}/{gender}/{address}', [UserController::class, 'aluno']);

Route::get('/contas/{operation}/{num1}/{num2}', [UserController::class, 'contas']);

Route::get('/lista', [UserController::class, 'lista']);

Route::get('/usuario/{name}/{lastname}',[UserController::class, 'usuario']);