<?php

use App\Http\Controllers\Article as ControllersArticle;
use App\Http\Controllers\User as ControllersUser;
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
    return view('home', [
        "greeting" => "Selamat datang!"
    ]);
});


Route::get('/articles', [ControllersArticle::class, 'index']); // 'index' is the name of the method in Controller class.
Route::get('/users', [ControllersUser::class, 'index']);
Route::get('/users/{id}', [ControllersUser::class, 'searchById']);
