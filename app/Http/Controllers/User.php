<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;

class User extends Controller
{
    public function index()
    {
        return ModelsUser::all();
    }

    public function searchById($id)
    {
        return ModelsUser::find($id);
    }
}
