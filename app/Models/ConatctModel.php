<?php

namespace App\Models;

use CodeIgniter\Model;

class ConatctModel extends Model
{
    protected $table      = 'contact';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['name', 'email','subject','message'];
}