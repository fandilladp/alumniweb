<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAngketSementaraModel extends Model
{
    protected $table = 'data_angket';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'namaalumni', 'deskripsi', 'gambar', 'cv', 'nim', 'ipk', 'mulaistudy', 'akhirstudy', 'waktutunggu', 'alamat', 'nomorhp', 'pendidikan', 'pekerjaan', 'statuskerja', 'bidangpekerjaan', 'jabatan', 'kepuasanprodi', 'kesesuaianilmu', 'informasipekerjaan', 'pencariankerja', 'hambatan', 'pindahkerja', 'kemampuanbahasainggris', 'kemampuantik', 'kemampuansoftware', 'mensyaratkanipk', 'manfaatstudiketerampilanteknis', 'manfaatstudiketerampilanteoritis', 'manfaatstudiprestis', 'manfaatstudikepercayaandiri', 'manfaatstudidalampendapatan', 'manfaatstudidalamkarir', 'manfaatstudidalamlintasbidang', 'manfaatstudidalammengikutiipteks', 'kebutuhanpengetahuanmahasiswa', 'hubungandenganprodi', 'bagaimanahubunganterjalin', 'komunikasidalamrangka', 'dibuatkansistemalumni', 'pelatihan', 'saransistemalumni', 'created_by', 'created_date', 'updated_date'
    ];
    protected $returnType = 'App\Entities\DataAngket';
    protected $useTimestamps = false;

    public function updateData($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function search($id)
    {
        // $builder = $this->table($this->table);
        // $builder->like('id', $id);
        // return $builder;
        return $this->table($this->table)->like('id', $id);
    }
}
