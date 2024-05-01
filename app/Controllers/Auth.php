<?php

namespace App\Controllers;

class Auth extends BaseController {
    public function showLogin(): string
    {
        return view('auth/login');
    }

    public function showRegister(): string {
        return view('/auth/register', ['is_from_register' => false]);
    }

    public function doLogin() {
        return redirect('dashboard');
    }

    public function register(): string
    {
        $adminModel = new \App\Models\AdminModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validate input (you can add more validation rules as needed)
        if (empty($username) || empty($password)) {
            // Handle validation errors
            return view('/auth/register', [
                'is_from_register' => true,
                'register_result' => false,
            ]);
        }

        $checkUsername = $adminModel->where('username', $username)->first();
        if ($checkUsername != null) {
            // username already exists, handle accordingly
            return view('/auth/register', [
                'is_from_register' => true,
                'register_result' => false,
            ]);
        }

        $data = [
            'id' => null,
            'username' => $username,
            'password' => password_hash((string)$password, PASSWORD_DEFAULT),
        ];

        $result = $adminModel->insert($data, false);

        return view('/auth/register', [
            'is_from_register' => true,
            'register_result' => $result
        ]);
    }

    public function login()
    {
        $adminModel = new \App\Models\AdminModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $result = $adminModel->insert($data, false);

        return redirect('/auth/login');
    }
}