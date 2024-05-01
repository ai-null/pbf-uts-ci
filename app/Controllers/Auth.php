<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function showLogin()
    {
        if ($this->session->get('user_id') != null) {
            return redirect()->route('dashboard');
        } else {
            return view('auth/login', ['is_from_login', false]);
        }
    }

    public function showRegister(): string
    {
        return view('/auth/register', ['is_from_register' => false]);
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
        $password = (string) $this->request->getPost('password');

        // Validate input (you can add more validation rules as needed)
        if (empty($username) || empty($password)) {
            // Handle validation errors
            return view('/auth/login', [
                'is_from_login' => true,
                'login_result' => false,
            ]);
        }

        $user = $adminModel->where('username', $username)->first();

        // user not found
        if ($user == null) {
            // Handle validation errors
            return view('/auth/login', [
                'is_from_login' => true,
                'login_result' => false,
            ]);
        }

        // password verifying
        if (password_verify($password, $user['password'])) {
            $this->session->set('user_id', $user['id']);
            return redirect()->route('dashboard');
        } else {
            // Handle validation errors
            return view('/auth/login', [
                'is_from_login' => true,
                'login_result' => false,
            ]);
        }
    }

    public function logout()
    {
        $_SESSION['user_id'] = null;
        return redirect()->route('/');
    }
}
