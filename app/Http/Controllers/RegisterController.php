<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
        //^\S+\w{8,32}\S{1,}
    }

    public function store()
    {
        $attributes = request()->validate([
                                              'name' => 'required|max:255',
                                              'username' => 'required|min:3|max:32|alpha_dash',
                                              'email' => 'required|email|max:255',
                                              'password' => 'required|min:9|max:255',
                                              'password_confirmation' => 'required_with:password|same:password|min:9',
                                          ]);

        User::create($attributes);

        return redirect('/');
    }
}
