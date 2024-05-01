<?php

namespace App\Controllers;

class Action extends BaseController
{
    public function index(): string {
        return view('/admin/dashboard');
    }
}