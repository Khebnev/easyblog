<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(Request $request) 
    {
        $date = $request->validation([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth("web")->attemp($date)) {
            return redirect(route("home"));
        }

        return redirect(route("login"))->withErrors("email" => "Пользователь не найден, либо данные введены не правильно")
    }

    public function logout()
    {
        return view("auth.logout");

        return redirect(route("home"));
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }
    public function register(Request $request) //через инъекцию зависимости передаём объект с запросом (второй парам метод)
    {
        $date = $request->validation([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users, email"],
            "password" => ["required", "confirmed"]
        ]);

        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if($user){
            auth("web")->login($user);
        }

        return redirect(route("home"));
    }
}
