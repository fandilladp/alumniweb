<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function index()
    {
        if ($this->session->get('isLoggedIn')) {
            $userModel = new \App\Models\UserModel();
            $dataalumni = new \App\Models\DataAngketModel();
            
            $username = $this->session = session('username');
            $myuser = $userModel->where('username', $username)->first();
            $id = $myuser->id;
            $alumni = $dataalumni->where('id', $id)->first();
            $cek = $dataalumni->find($id);
            if($myuser->role == 1){
                    return view('user/alumni', [
                        $cek,
                        'alumni' => $alumni,
                        'myuser' => $myuser,
                        ]);
            }
            elseif($myuser->role == 2){
                $all = $dataalumni->findAll();
                return view('user/admin', [
                    'all' => $all,
                ]);  
            }           
        }
        return redirect()->to(site_url('auth/login'));
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
                $b->gambar = $this->request->getFile('gambar');
                $b->cv = $this->request->getFile('cv');
                
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
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $projek = new \App\Models\DataAngketModel();
        $delete = $projek->delete($id);

        return redirect()->to(site_url('user/index'));
    }
}
