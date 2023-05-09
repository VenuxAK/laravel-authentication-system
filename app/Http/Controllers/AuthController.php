<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }
    public function store()
    {
        $formData = request()->validate([
            "name" => [
                "required", "min:3", "max:254"
            ],
            "username" => [
                "required", "min:3", "max:254", Rule::unique("users", "username")
            ],
            "email" => [
                "required", "email", "max:254", Rule::unique("users", "email")
            ],
            "password" => [
                "required", "min:6", "max:254"
            ]
        ]);
        $user = User::create($formData);
        auth()->login($user);
        return redirect("/")->with("success", "Welcome," . $user->name);
    }

    public function login()
    {
        return view("auth.login");
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/")->with("success", "Bye, see you again");
    }
}
