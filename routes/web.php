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
    return view('home', [
        "greeting" => "Selamat datang!"
    ]);
});


Route::get('/blog', function () {
    $articles = [
        [
            "title" => "Pameran Marvel Studios Terbesar se-Asia Tenggara Dibuka di PIM Jakarta.",
            "img_url" => "https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAY1QnH.img?h=1080&w=1920&m=6&q=60&o=f&l=f",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, facilis?"
        ],
        [
            "title" => "Selamat Datang! Antonio Rudiger Telah Resmi Gabung Real Madrid.",
            "img_url" => "https://cdns.klimg.com/bola.net/library/upload/21/2021/09/antonio-rudiger_04f24be.jpg",
            "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, culpa!"
        ],
    ];

    return view('blog', ["articles" => $articles]);
});
