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
        // if ($this->session->get('isLoggedIn')) {
            return view('alumni/index');
        // }
        // return redirect()->to(site_url('auth/login'));
    }
    //--------------------------------------------------------------------
    public function projek()
    {
        if ($this->session->get('isLoggedIn')) {
            $id = $this->request->uri->getSegment(3);

            $dataangketmodel = new \App\Models\DataAngketModel();

            $projek = $dataangketmodel->find($id);
            $valid = $projek->created_by;
            if ($valid == $this->session = session('username')) {
                return view('alumni/projek', [
                    'projek' => $projek,
                ]);
            }
            return redirect()->to(site_url('auth/logout'));
        }
        return redirect()->to(site_url('auth/login'));
    }
    //--------------------------------------------------------------------
    public function created()
    {
        if ($this->session->get('isLoggedIn')) {
            if ($this->request->getPost()) {
                //jika ada data yang di post
                $data = $this->request->getPost();
                $this->validation->run($data, 'angket');
                $errors = $this->validation->getErrors();

                if (!$errors) {
                    //simpan datanya
                    $DataAngketModel = new \App\Models\DataAngketModel();

                    $datavalid = new \App\Entities\DataAngket();
                    $datavalid->namaalumni = htmlspecialchars($this->request->getPost('namaalumni'));
                    $datavalid->nim = htmlspecialchars($this->request->getPost('nim'));
                    $datavalid->ipk = htmlspecialchars($this->request->getPost('ipk'));
                    $datavalid->lamastudy = htmlspecialchars($this->request->getPost('lamastudy'));
                    $datavalid->waktutunggu = htmlspecialchars($this->request->getPost('waktutunggu'));
                    $datavalid->alamat = htmlspecialchars($this->request->getPost('alamat'));
                    $datavalid->nomorhp = htmlspecialchars($this->request->getPost('nomorhp'));
                    $datavalid->pendidikan = htmlspecialchars($this->request->getPost('pendidikan'));
                    $datavalid->pekerjaan = htmlspecialchars($this->request->getPost('pekerjaan'));                    
                    $datavalid->created_by = $this->session->get('username');
                    $datavalid->created_date = date("Y-m-d H:i:s");

                    $DataAngketModel->save($datavalid);

                    $id = $DataAngketModel->insertID();

                    return redirect()->to(site_url('user/index'));
                } else {
                    $this->session->setFlashdata('errors', $errors);
                }
            }
            return view('alumni/created');
        }
        return redirect()->to(site_url('auth/login'));
    }
    //--------------------------------------------------------------------
    public function update()
    {
        $statusfield1 = $this->request->getPost('statusfield1');
        $statusfield2 = $this->request->getPost('statusfield2');
        $statusfield3 = $this->request->getPost('statusfield3');
        if (!$statusfield1) {
            $statusfield1 = 'off';
        }
        if (!$statusfield2) {
            $statusfield2 = 'off';
        }
        if (!$statusfield3) {
            $statusfield3 = 'off';
        }

        $id = $this->request->uri->getSegment(3);

        $DataAngketModel = new \App\Models\DataAngketModel();

        $projek = $DataAngketModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'angket');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\DataAngket();
                $b->id = $id;
                $b->fill($data);
                $b->statusfield1 = $statusfield1;
                $b->statusfield2 = $statusfield2;
                $b->statusfield3 = $statusfield3;

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }

                $b->updated_date = date("Y-m-d H:i:s");

                $DataAngketModel->save($b);

                return redirect()->to(site_url('user/index'));
            } else {
                $this->session->setFlashdata('errors', $errors);
            }
        }

        return view('alumni/update', [
            'projek' => $projek,
        ]);
    }
    //--------------------------------------------------------------------
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $projek = new \App\Models\DataAngketModel();
        $delete = $projek->delete($id);

        return redirect()->to(site_url('user/index'));
    }
}
