<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// ターミナルでphp artisan route:listでrouteの中身を詳しく確認できる. App\Http\Controllers\MemberControllerによりURLの指定しないのであれば上にuse…で記載しても良い

Route::resource('members', App\Http\Controllers\MemberController::class);