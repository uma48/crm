<?php

namespace App\Http\Controllers;


class LoginController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }

   }
