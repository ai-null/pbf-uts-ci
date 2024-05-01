<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model {

    protected $table      = 'reservasi';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id', 'nama', 'kelamin', 'status'];

    protected bool $allowEmptyInserts = false;
}