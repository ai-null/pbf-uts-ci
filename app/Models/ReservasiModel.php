<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model {

    protected $table      = 'reservasi';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['nama', 'kelamin'];

    protected bool $allowEmptyInserts = false;
}