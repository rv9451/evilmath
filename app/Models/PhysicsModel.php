<?php

namespace App\Models;

use CodeIgniter\Model;

class PhysicsModel extends Model
{
    protected $table      = 'physics';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['link', 'title','teacher','timer','category'];
}