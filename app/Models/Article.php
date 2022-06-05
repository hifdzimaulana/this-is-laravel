<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;


class Article
{

    public static function all()
    {
        return Http::get("https://newsapi.org/v2/top-headlines?country=id&apiKey=c1f18415d19d4006bc1939f7c093d583");
    }
}
