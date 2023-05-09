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
    public function post_login()
    {
        $formData = request()->validate([
            "email" => ["required", "email", Rule::exists("users", "email")],
            "password" => ["required", "max:254"]
        ], [
            "email.exists" => "Email address not register yet" // Overwrite default error message with custom message
        ]);

        if (auth()->attempt($formData)) {
            return redirect("/")->with("success", "Welcome back");
        } else {
            return redirect()->back()->withErrors([
                "errors" => "Wrong Credentials" // Redirect with custom error message
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/")->with("success", "Bye, see you again");
    }
}
