<?php

namespace App\Controllers;
use App\Models\MemberModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        helper('form');
        return view('login');
    }
    public function auth(){
        helper('form');
        $session = session();
        $modelMember = new MemberModel();
        $id_card = $this->request->getVar('id_card');
        $password = $this->request->getVar('password');
        $data = $modelMember->where('id_card', $id_card)->first();
        if($data){
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass); 
            if($verify_password){
                $ses_data = [
                    'id_card' =>$data['id_card'],
                    'name' =>$data['name'],
                    'age' =>$data['age'],
                    'email' =>$data['email'],
                    'logged_in'=>TRUE,
                ];
                $session->set($ses_data);
                return redirect()->to('/menu');
            }else{
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'เลขบัตรประชาชนไม่ถูกต้อง');
            return redirect()->to('/login');
        }

    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
