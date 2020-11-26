<?php

namespace App\Controllers;

class Angket extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('auth');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function created()
    {
        if (logged_in()) {
            if ($this->request->getPost()) {
                //jika ada data yang di post
                $data = $this->request->getPost();
                $this->validation->run($data, 'angket');
                $errors = $this->validation->getErrors();

                if (!$errors) {
                    //simpan datanya
                    $DataAngketModel = new \App\Models\DataAngketModel();
                    
                    $datavalid = new \App\Entities\DataAngket();
                    
                    $datavalid->id = user_id();
                    $datavalid->namaalumni = htmlspecialchars($this->request->getPost('namaalumni'));
                    $datavalid->nim = htmlspecialchars($this->request->getPost('nim'));
                    $datavalid->ipk = htmlspecialchars($this->request->getPost('ipk'));
                    $datavalid->mulaistudy = htmlspecialchars($this->request->getPost('mulaistudy'));
                    $datavalid->akhirstudy = htmlspecialchars($this->request->getPost('akhirstudy'));
                    $datavalid->waktutunggu = htmlspecialchars($this->request->getPost('waktutunggu'));
                    $datavalid->alamat = htmlspecialchars($this->request->getPost('alamat'));
                    $datavalid->nomorhp = htmlspecialchars($this->request->getPost('nomorhp'));
                    $datavalid->pendidikan = htmlspecialchars($this->request->getPost('pendidikan'));
                    $datavalid->pekerjaan = htmlspecialchars($this->request->getPost('pekerjaan'));                    
                    $datavalid->created_by = user()->username;
                    $datavalid->created_date = date("Y-m-d H:i:s");

                    $DataAngketModel->insert($datavalid);

                    return redirect()->to(site_url('user/index'));
                } else {
                    $this->session->setFlashdata('errors', $errors);
                    return redirect()->back()->withInput();
                }
            }
            return view('angket/created');
        }
        return redirect()->to(site_url('auth/login'));
    }
    public function kepuasan()
    {
        if (logged_in()) {
            if ($this->request->getPost()) {
                //jika ada data yang di post
                $data = $this->request->getPost();
                $this->validation->run($data, 'kepuasan');
                $errors = $this->validation->getErrors();

                if (!$errors) {
                    //simpan datanya
                    $DataAngketModel = new \App\Models\DataAngketModel();

                    $datavalid = new \App\Entities\DataAngket();
                    $id = user_id();
                
                    $datavalid->statuskerja = htmlspecialchars($this->request->getPost('statuskerja'));
                    $datavalid->bidangpekerjaan = htmlspecialchars($this->request->getPost('bidangpekerjaan'));
                    $datavalid->jabatan = htmlspecialchars($this->request->getPost('jabatan'));
                    $datavalid->kepuasanprodi = htmlspecialchars($this->request->getPost('kepuasanprodi'));
                    $datavalid->kesesuaianilmu = htmlspecialchars($this->request->getPost('kesesuaianilmu'));
                    $datavalid->informasipekerjaan = htmlspecialchars($this->request->getPost('informasipekerjaan'));
                    $datavalid->pencariankerja = htmlspecialchars($this->request->getPost('pencariankerja'));
                    $datavalid->hambatan = htmlspecialchars($this->request->getPost('hambatan'));
                    $datavalid->pindahkerja = htmlspecialchars($this->request->getPost('pindahkerja'));                    
                    $datavalid->kemampuanbahasainggris = htmlspecialchars($this->request->getPost('kemampuanbahasainggris'));
                    $datavalid->kemampuantik = htmlspecialchars($this->request->getPost('kemampuantik'));
                    $datavalid->kemampuansoftware = htmlspecialchars($this->request->getPost('kemampuansoftware'));
                    $datavalid->mensyaratkanipk = htmlspecialchars($this->request->getPost('mensyaratkanipk'));
                    $datavalid->manfaatstudiketerampilanteknis = htmlspecialchars($this->request->getPost('manfaatstudiketerampilanteknis'));
                    $datavalid->manfaatstudiketerampilanteoritis = htmlspecialchars($this->request->getPost('manfaatstudiketerampilanteoritis'));
                    $datavalid->manfaatstudiprestis = htmlspecialchars($this->request->getPost('manfaatstudiprestis'));
                    $datavalid->manfaatstudikepercayaandiri = htmlspecialchars($this->request->getPost('manfaatstudikepercayaandiri'));
                    $datavalid->manfaatstudidalampendapatan = htmlspecialchars($this->request->getPost('manfaatstudidalampendapatan'));
                    $datavalid->manfaatstudidalamkarir = htmlspecialchars($this->request->getPost('manfaatstudidalamkarir'));
                    $datavalid->manfaatstudidalamlintasbidang = htmlspecialchars($this->request->getPost('manfaatstudidalamlintasbidang'));
                    $datavalid->manfaatstudidalammengikutiipteks = htmlspecialchars($this->request->getPost('manfaatstudidalammengikutiipteks'));
                    $datavalid->kebutuhanpengetahuanmahasiswa = htmlspecialchars($this->request->getPost('kebutuhanpengetahuanmahasiswa'));
                    $datavalid->created_by = user()->username;
                    $datavalid->created_date = date("Y-m-d H:i:s");

                    $DataAngketModel->update($id, $datavalid);

                    return redirect()->to(site_url('user/index'));
                } else {
                    $this->session->setFlashdata('errors', $errors);
                }
            }
            return view('angket/kepuasan');
        }
        return redirect()->to(site_url('auth/login'));
    }
    public function hubunganalumni()
    {
        if (logged_in()) {
            if ($this->request->getPost()) {
                //jika ada data yang di post
                $data = $this->request->getPost();
                $this->validation->run($data, 'hubunganprodi');
                $errors = $this->validation->getErrors();

                if (!$errors) {
                    //simpan datanya

                    $id = user_id();

                    $DataAngketModel = new \App\Models\DataAngketModel();
                    
                    $datavalid = new \App\Entities\DataAngket();
                    $id = user_id();
                    $datavalid->hubungandenganprodi = htmlspecialchars($this->request->getPost('hubungandenganprodi'));
                    $datavalid->bagaimanahubunganterjalin = htmlspecialchars($this->request->getPost('bagaimanahubunganterjalin'));
                    $datavalid->komunikasidalamrangka = htmlspecialchars($this->request->getPost('komunikasidalamrangka'));
                    $datavalid->dibuatkansistemalumni = htmlspecialchars($this->request->getPost('dibuatkansistemalumni'));
                    $datavalid->pelatihan = htmlspecialchars($this->request->getPost('pelatihan'));
                    $datavalid->saransistemalumni = htmlspecialchars($this->request->getPost('saransistemalumni'));
                    $datavalid->created_by = user()->username;
                    $datavalid->created_date = date("Y-m-d H:i:s");
                   
                    $DataAngketModel->update($id, $datavalid);

                    return redirect()->to(site_url('user/index'));
                } else {
                    $this->session->setFlashdata('errors', $errors);
                }
            }
            return view('angket/hubunganalumni');
        }
        return redirect()->to(site_url('auth/login'));
    }
    //--------------------------------------------------------------------
    // public function deleteDataSementara()
    // {
    //     $id = user_id();

    //     $data = new \App\Models\DataAngketSementaraModel();
    //     $data->delete($id);

    //     return redirect()->to(site_url('user/index'));
    // }
}
