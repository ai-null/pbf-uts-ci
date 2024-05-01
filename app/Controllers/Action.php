<?php

namespace App\Controllers;

class Action extends BaseController
{
    public function index(): string
    {
        $reservationModel = new \App\Models\ReservasiModel();
        $result = $reservationModel->findAll();

        return view('/admin/dashboard', [
            'data' => $result,
            'is_active' => true,
        ]);
    }
}
