<?php

namespace App\Models;


class User
{
    private static $users = [
        [
            "id" => 1,
            "name" => "Muhammad Hidfzi Maulana",
            "age" => 16,
            "gender" => "M"
        ],
        [
            "id" => 2,
            "name" => "John Doe",
            "age" => 18,
            "gender" => "M"
        ],
        [
            "id" => 3,
            "name" => "Mozzanine Manna",
            "age" => 18,
            "gender" => "F"
        ],
    ];

    public static function all()
    {
        return self::$users;
    }

    public static function find($id)
    {
        foreach (self::$users as $key => $value) {
            if ($id == $value['id']) {
                return $value;
            }
        }
        return response(["status" => 404, "message" => "Not found"], 404);
    }
}
