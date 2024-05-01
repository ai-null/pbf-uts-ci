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
            'is_error' => null
        ]);
    }

    public function update()
    {
        $reservationModel = new \App\Models\ReservasiModel();        

        $update = $this->_update($reservationModel);
        $result = $reservationModel->findAll();

        return view('/admin/dashboard', [
            'data' => $result,
            'is_error' => $update
        ]);
    }

    private function _update(\App\Models\ReservasiModel $reservationModel): bool
    {
        $action = $this->request->getPost('action');
        $id = $this->request->getPost('id');

        if ($action == "1") {
            return $reservationModel->update($id, [
                'status' => 'accepted'
            ]);
        } else if ($action == "0") {
            return $reservationModel->delete($id);
        } else {
            return false;
        }
    }
}
