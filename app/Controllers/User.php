<?php

namespace App\Controllers;

use App\Models\DataAngketModel;
use CodeIgniter\Database\BaseResult;

class User extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('auth');
        $this->uploadcv = new DataAngketModel();
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function index()
    {
        if (logged_in()) {
            // $userModel = new \App\Models\UserModel();
            $dataalumni = new \App\Models\DataAngketModel();
            $aktivasi = new \App\Models\UserModel();
            // $username = $this->session = session('username');
            // $myuser = $userModel->where('username', $username)->first();
            // $id = $myuser->id;
            $alumni = $dataalumni->where('id', user_id())->first();

            // if (user()->status == 'alumni') {

            //     if (!$alumni == null) {
            //         $status = 'on';
            //     }else{
            //         $status = 'off';
            //     }
            //     return view('user/alumni', [
            //         'status' => $status,
            //         'alumni' => $alumni,
            //         'myuser' => $myuser,
            //     ]);
            // } elseif ($myuser->role == 2) {
            //     $all = $dataalumni->findAll();
            //     return view('user/admin', [
            //         'all' => $all,
            //     ]);
            // }
            if (user()->status == 'alumni') {
                if (!$alumni == null) {
                    if (!$alumni->saransistemalumni == null) {
                        $status = 'on';
                    }else {
                        $status = 'off';
                    }
                } else {
                    $status = 'off';
                }
                return view('user/alumni', [
                    'status' => $status,
                    'alumni' => $alumni,
                    'myuser' => user(),
                ]);
            } elseif (user()->status == 'admin') {
               
                $aktivasi = $aktivasi->where('status', 'tamu')->findAll();
                $all = $dataalumni->findAll();
                return view('user/admin', [
                    'all' => $all,
                    'aktivasi' => $aktivasi
                ]);
            }
        }
        return redirect()->to(site_url('login'));
    }

    public function cv()
    {
        $id = $this->request->uri->getSegment(3);
        if ($this->request->getPost()) {
            $validasi = $this->request->getPost('cv');
            $this->validation->run($validasi, 'cv');

            $errors = $this->validation->getErrors('cv');

            if (!$errors) {

                $upload = $this->request->getFile('cv');
                $cv = $upload->getRandomName();
                $data = [
                    'id' => $id,
                    'cv' => $cv,
                    'updated_date' => date("Y-m-d H:i:s")
                ];
                $this->uploadcv->updateData($data, $id);
                $upload->move(ROOTPATH . 'public/cv', $cv);

                return redirect()->to(site_url('user/index'));
            } else {
                $this->session->setFlashdata('errors', $errors);
            }
        }
        return redirect()->to(site_url('user/index'));
    }


    //    -------------------------------------------------------------------->
    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $dataalumni = new \App\Models\DataAngketModel();

        $dataalumni->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost('gambar');
            $this->validation->run($data, 'foto');

            $errors = $this->validation->getErrors('gambar');

            if (!$errors) {
                $b = new \App\Entities\DataAngket();
                $b->id = $id;
                $b->fill($data);
                $b->namaalumni = $this->request->getPost('namaalumni');
                $b->deskripsi  = $this->request->getPost('deskripsi');
                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }

                $b->updated_date = date("Y-m-d H:i:s");


                $dataalumni->update($id, $b);
                return redirect()->to(site_url('user/index'));
            } else {
                // var_dump($errors);die;
                $this->session->setFlashdata('errors', $errors);
            }
        }
        return redirect()->to(site_url('user/index'));
    }

    //--------------------------------------------------------------------
    public function aktivasi()
    {
        $id = $this->request->uri->getSegment(3);

        $user = new \App\Models\UserModel();
        $data = [
            'status' => 'alumni'
        ];
        $user->update($id, $data);
        return redirect()->to(site_url('user/index'));
    }
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $user = new \App\Models\DataAngketModel();
        $user->delete($id);

        return redirect()->to(site_url('user/index'));
    }
    public function updatetracer()
    {
        $tracerModel = new \App\Models\TracerStudyModel();
        $id = 2020;
        $dosen = $this->request->getPost('dosen');
        $softwareDeveloper = $this->request->getPost('softwaredeveloper');
        $freelance = $this->request->getPost('freelance');
        $datajson = array("dosen"=>$dosen, "softwareDevelopment"=>$softwareDeveloper, "freelance"=>$freelance);
        $json = json_encode($datajson);
        $data = [
            'bidangpekerjaan' => $json
        ];
        $tracerModel->update($id, $data);

        return redirect()->to(site_url('user/index'));
    }
}
