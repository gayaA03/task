<?php

namespace App\Http\Controllers\Main;

use App\Models\User;
use ΩApp\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('main.index', compact('users'));

    }
}
