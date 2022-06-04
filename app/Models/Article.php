<?php

namespace App\Models;


class Article
{
    private static $articles = [
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

    public static function all()
    {
        // if the called variable is static
        return self::$articles;
        // or else
        // $this->articles
    }
}
