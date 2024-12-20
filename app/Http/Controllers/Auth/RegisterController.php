<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister()
    {

        return inertia('Auth/Register');
    }

    public function showLogin()
    {
        return inertia('Auth/Login');
    }
}
