<?php

namespace App\Controllers;

class Alumni extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    //--------------------------------------------------------------------
    public function index()
    {
        $dataalumni = new \App\Models\DataAngketModel();
        $jumlahlumni = $dataalumni->countAllResults();
        $namaalumni = $dataalumni->findColumn('namaalumni');
        $deskripsi = $dataalumni->findColumn('deskripsi');
        $avatar = $dataalumni->findColumn('gambar');
        $id = $dataalumni->findColumn('id');
        return view('alumni/index', [
            'id' => $id,
            'jumlah' => $jumlahlumni,
            'namaalumni' => $namaalumni,
            'deskripsi' => $deskripsi,
            'avatar' => $avatar
        ]);
    }
    //--------------------------------------------------------------------
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $dataangketmodel = new \App\Models\DataAngketModel();
        $data = $dataangketmodel->where('id', $id)->findColumn('cv');
        return view('alumni/view', [
            'cv' => $data,
        ]);
    }
    //--------------------------------------------------------------------

    //--------------------------------------------------------------------
}
