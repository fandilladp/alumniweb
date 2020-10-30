<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAngketModel extends Model
{
    protected $table = 'data_angket';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'namaalumni', 'nim', 'ipk', 'lamastudy', 'waktutunggu', 'alamat', 'nomorhp', 'pendidikan', 'pekerjaan', 'statuskerja', 'bidangpekerjaan', 'jabatan', 'kepuasanprodi', 'kesesuaianilmu', 'informasipekerjaan', 'pencariankerja', 'hambatan', 'pindahkerja', 'kemampuanbahasainggris', 'kemampuantik', 'kemampuansoftware', 'mensyaratkanipk', 'manfaatstudiketerampilanteknis', 'manfaatstudiketerampilanteoritis', 'manfaatstudiprestis', 'manfaatstudikepercayaandiri', 'manfaatstudidalampendapatan', 'manfaatstudidalamkarir', 'manfaatstudidalamlintasbidang', 'manfaatstudidalammengikutiipteks', 'kebutuhanpengetahuanmahasiswa', 'hubungandenganprodi', 'bagaimanahubunganterjalin', 'komunikasidalamrangka', 'dibuatkansistemalumni', 'pelatihan', 'saransistemalumni', 'created_by', 'created_date', 'updated_date'
    ];
    protected $returnType = 'App\Entities\DataProjek';
    protected $useTimestamps = false;

    public function updateData($data, $API)
    {
        return $this->db->table($this->table)->update($data, ['token' => $API]);
    }
}
