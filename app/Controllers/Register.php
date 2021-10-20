<?php

namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        helper('form');
        return view('register');
    }

    public function save(){
        helper('form');
        $rules=[
            'id_card'=> 'required',
            'name'=> 'required',
            'age'=> 'required',
            'password'=> 'required',
            'email'=> 'required'
        ];
        if($this->validate($rules)){
            $modelMember = new MemberModel();
            $data = [
                'id_card'=> $this->request->getVar('id_card'),
                'name'=> $this->request->getVar('name'),
                'age'=> $this->request->getVar('age'),
                'password'=> $this->request->getVar('password'),
                'email'=> $this->request->getVar('email')
            ];
            $modelMember->insert($data);
            return redirect()->to('/login');
        }
    }
}
