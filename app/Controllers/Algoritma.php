<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Algoritma extends ResourceController
{
    protected $modelName = 'App\Models\TracerStudyModel';
    protected $format    = 'json';
    public function refresh()
    {
        helper('form');
        $API = 2020; //tahun2020 dibuat id
        $dataangket = new \App\Models\DataAngketModel();

        $datakepuasanprodi = $dataangket->findColumn('kepuasanprodi');
        $jumlahlumni = $dataangket->countAllResults();
        $jmlkepuasan = array_sum($datakepuasanprodi);
        //===================================================        
        $persentasekepuasan = $jmlkepuasan / $jumlahlumni * 10;
        //====================================================
        $dataalumnibekerja = $dataangket->findColumn('statuskerja');

        $jmlbekerja = array_sum($dataalumnibekerja);
        //====================================================
        $persentasebekerja = $jmlbekerja / $jumlahlumni * 10;
        //====================================================
        $datahubungandenganalumni = $dataangket->findColumn('hubungandenganprodi');

        $jmlhubungan = array_sum($datahubungandenganalumni);

        $persentasehubungan = $jmlhubungan / $jumlahlumni * 10;


        $data = [
            'kepuasan' => $persentasekepuasan,
            'bekerja' => $persentasebekerja,
            'hubungandenganprodi' => $persentasehubungan,
        ];
        return $this->model->updateData($data, $API);
    }
    public function fetch()
    {
        $id = 2020;
        $dataprojek = new \App\Models\TracerStudyModel();

        $projek = $dataprojek->where('id', $id)->first();

        return $this->respond($projek);
    }
}
