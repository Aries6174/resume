<?php

namespace App\Models;

use CodeIgniter\Model;

class ResumeModel extends Model
{
    protected $table = 'resume';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 
        'phone',
        'email', 
        'github',
        'address',
        'profile',
        'expertise',
        'languages'
    ];

    public function updateResume(int $id, array $data)
    {
        return $this->update($id, $data);
    }

    public function getResume(int $id = 1)
    {
        return $this->find($id);
    }
}
