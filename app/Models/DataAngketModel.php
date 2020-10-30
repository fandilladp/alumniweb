<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAngketModel extends Model
{
    protected $table = 'data_angket';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'namaalumni', 'nim', 'ipk', 'lamastudy', 'waktutunggu', 'alamat', 'nomorhp', 'pendidikan', 'pekerjaan', 'created_by', 'created_date', 'updated_date'
    ];
    protected $returnType = 'App\Entities\DataProjek';
    protected $useTimestamps = false;

    public function updateData($data, $API)
    {
        return $this->db->table($this->table)->update($data, ['token' => $API]);
    }
}
