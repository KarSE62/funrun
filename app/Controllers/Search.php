<?php

namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Controller;

class Search extends Controller
{
    public function index()
    {
        return view('searchmenu');
    }
    

    public function searchfunrun()
    {
        $model = new MemberModel();
        $data['student'] = $model->findAll();
        return view('/searchfunrun', $data);
    }
}
