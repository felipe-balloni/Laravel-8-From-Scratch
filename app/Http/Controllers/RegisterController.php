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
                                              'username' => 'required|min:3|max:32|alpha_dash|unique:users,username',
                                              'email' => 'required|email|max:255|unique:users,email',
                                              'password' => 'required|min:9|max:255',
                                              'password_confirmation' => 'required_with:password|same:password|min:9',
                                          ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created and you logged-in.');
    }
}
