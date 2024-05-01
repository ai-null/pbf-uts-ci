<?php

namespace App\Controllers;

class Auth extends BaseController {

    public function showLogin(): string
    {
        return view('login');
    }

    public function doLogin() {
        if ($this->input->post()) {
            $identity = $this->input->post('identity');
            $password = $this->input->post('password');
            $remember = $this->input->post('remember');
    
            if ($this->ion_auth->login($identity, $password, $remember)) {
                // Login successful, redirect to dashboard or any other page
                redirect('dashboard');
            } else {
                // Login failed, show error message
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                redirect('login');
            }
        }
    
        // Load login form view
        $this->load->view('login');
    }
}