<?php

namespace App\Controllers;

use App\Models\RegisModel;
use CodeIgniter\Controller;

class Regisfunrun extends Controller
{
    public function index()
    {
        helper('form');
        return view('regisfunrun');
    }
    public function saveregis(){
        helper('form');
        $rules=[
            'member'=> 'required',
            'ID'=> 'required',
            'category_run'=> 'required'
        ];
        if($this->validate($rules)){
            $modelRegis = new RegisModel();
            $data = [
                'member'=> $this->request->getVar('member'),
                'ID'=> $this->request->getVar('ID'),
                'category_run'=> $this->request->getVar('category_run'),
            ];
            //var_dump($data);
            $modelRegis->insert($data);
            return redirect()->to('/menu');
        }
    }
    
}
