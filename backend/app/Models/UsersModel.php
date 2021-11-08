<?php

namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'email', 'password', 'salt', 'img', 'created_date', 'updated_date'
    ];

    protected $returnType = 'App\Entities\Users';
    protected $useTimestamps = false;
}
