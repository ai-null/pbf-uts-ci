<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message', [
            'is_from_post' => false,
            'post_response' => false
        ]);
    }

    public function reserve(): string
    {
        $reservationModel = new \App\Models\ReservasiModel();

        $data = [
            'id'         => null,
            'nama'       => $this->request->getPost('nama'),
            'kelamin'    => $this->request->getPost('kelamin'),
        ];

        $result = $reservationModel->insert($data, false);
        return view('welcome_message', [
            'is_from_post' => true,
            'post_response' => $result
        ]);
    }
}
