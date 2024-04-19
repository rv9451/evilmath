<?php

namespace App\Models;

use CodeIgniter\Model;

class MathModel extends Model
{
    protected $table      = 'math';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['link', 'title','teacher','timer','category'];
}