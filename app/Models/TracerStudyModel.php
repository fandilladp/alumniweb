<?php

namespace App\Models;

use CodeIgniter\Model;

class TracerStudyModel extends Model
{
    protected $table = 'tracer_study';
    protected $primaryKey = 'id';
    protected $allowedFields = [
       'kepuasan', 'bekerja', 'hubungandenganprodi'
    ];
    protected $returnType = 'App\Entities\TracerStudy';
    protected $useTimestamps = false;

    public function updateData($data, $API)
    {
        return $this->db->table($this->table)->update($data, ['id' => $API]);
    }
}
