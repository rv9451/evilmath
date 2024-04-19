<?php

namespace App\Models;

use CodeIgniter\Model;

class ChemistryModel extends Model
{
    protected $table      = 'chemistry';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['link', 'title','teacher','timer','category'];
}