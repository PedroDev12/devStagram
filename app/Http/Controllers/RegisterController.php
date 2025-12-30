<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

   public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'username' => 'required|unique:users,username|min:3|max:20',
            'email' => 'required|email|unique:users,email|max:60',
            'password' => 'required|min:8',
        ]);
    }

}
