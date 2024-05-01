<?php

namespace App\Controllers;

class Auth extends BaseController {

    public function showLogin(): string
    {
        return view('auth/login');
    }

    public function showRegister(): string {
        return view('/auth/register');
    }

    public function doLogin() {
        return redirect('dashboard');
    }
}