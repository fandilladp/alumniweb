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
    
    //--------------------------------------------------------------------
}
