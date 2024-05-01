<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if ($_SESSION['user_id'] == null) {
            redirect('login');
        }

        return view('welcome_message', [
            'is_from_post' => false,
            'post_response' => false
        ]);
    }

    public function reserve(): string
    {
        $reservationModel = new \App\Models\ReservasiModel();

        $nama = $this->request->getPost('nama');
        $kelamin = $this->request->getPost('kelamin');

        $data = [
            'id'        => null,
            'nama'      => $nama,
            'kelamin'   => $kelamin,
        ];

        if (empty($nama) || empty($kelamin)) {
            return view('welcome_message', [
                'is_from_post' => true,
                'post_response' => false
            ]);
        }

        $result = $reservationModel->insert($data, false);
        return view('welcome_message', [
            'is_from_post' => true,
            'post_response' => $result
        ]);
    }
}
