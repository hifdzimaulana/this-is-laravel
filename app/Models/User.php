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
            "name" => "Yaya Tourre",
            "age" => 18,
            "gender" => "M"
        ],
    ];

    public static function all()
    {
        return collect(self::$users);
    }

    public static function find($id)
    {
        $result = collect(self::all())->firstWhere('id', '==', $id);
        return $result ? $result : response(["status" => 404, "message" => "Not found"], 404);
    }
}
