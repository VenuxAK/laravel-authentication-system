<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }
    public function login()
    {
        return view("auth.login");
    }
}
