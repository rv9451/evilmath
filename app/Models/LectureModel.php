<?php

namespace App\Models;

use CodeIgniter\Model;

class LectureModel extends Model
{
    protected $table      = 'lecture';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['link', 'title','teacher','timer'];
}